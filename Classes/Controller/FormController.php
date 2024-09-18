<?php

namespace Sup7even\Mailchimp\Controller;

use Psr\Http\Message\ResponseInterface;
use Sup7even\Mailchimp\Domain\Model\Dto\FormDto;
use Sup7even\Mailchimp\Exception\GeneralException;
use Sup7even\Mailchimp\Exception\MemberExistsException;
use Sup7even\Mailchimp\Service\ApiService;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Annotation\IgnoreValidation;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class FormController extends ActionController
{
    /**
     * @param FormDto|null $form
     */
    #[IgnoreValidation(['value' => 'form'])]
    public function indexAction(FormDto $form = null): ResponseInterface
    {
        if ($form === null) {
            /** @var FormDto $form */
            $form = GeneralUtility::makeInstance(FormDto::class);
            $prefill = $this->request->getParsedBody()['email'] ?? $this->request->getQueryParams()['email'] ?? null;
            if ($prefill) {
                $form->setEmail($prefill);
            }
        }

        $apiService = $this->getApiService($this->settings['apiKey']);

        if ($this->settings['interestId']) {
            $interests = $apiService->getCategories($this->settings['listId'], $this->settings['interestId']);
        } else {
            $interests = [];
        }
        $this->view->assignMultiple([
            'form' => $form,
            'interests' => $interests,
            'apiKey' => $apiService->getApiKey(),
        ]);
        return $this->htmlResponse();
    }

    /**
     * @param FormDto|null $form
     */
    #[IgnoreValidation(['value' => 'form'])]
    public function ajaxResponseAction(FormDto $form = null): ResponseInterface
    {
        if ($form === null) {
           return $this->htmlResponse('');
        }
        $this->handleRegistration($form);
        return $this->htmlResponse();
    }

    /**
     * @param FormDto|null $form
     */
    public function responseAction(FormDto $form = null): ResponseInterface
    {
        if ($form === null) {
            $this->redirect('index');
        }

        $this->handleRegistration($form);
        return $this->htmlResponse();
    }

    protected function handleRegistration(FormDto $form = null): void
    {
        $doublOptIn = true;
        if (isset($this->settings['skipDoubleOptIn']) && $this->settings['skipDoubleOptIn'] == 1) {
            $doublOptIn = false;
        }
        try {
            $apiService = $this->getApiService($this->settings['apiKey'] ?? '');
            $apiService->register($this->settings['listId'], $form, $doublOptIn);
        } catch (MemberExistsException $e) {
            $this->view->assign('error', 'memberExists');
            $this->view->assign('exception', $e);
        } catch (GeneralException $e) {
            $this->view->assign('error', 'general');
            $this->view->assign('exception', $e);
        }
        $this->view->assignMultiple([
            'form' => $form,
        ]);
    }

    private function getApiService(string $hash = null): ApiService
    {
        return GeneralUtility::makeInstance(ApiService::class, $hash);
    }
}
