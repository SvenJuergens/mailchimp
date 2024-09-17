<?php

namespace Sup7even\Mailchimp\Domain\Model\Dto;

use TYPO3\CMS\Extbase\Annotation\Validate;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class FormDto extends AbstractEntity
{

    /** @var string */
    protected string $firstName = '';

    /** @var string */
    protected string $lastName = '';

    /**
     * @var string
     */
    #[Validate(['validator' => 'NotEmpty'])]
    #[Validate(['validator' => 'EmailAddress'])]
    protected string $email = '';

    /** @var array */
    protected array $interests = [];

    /** @var string */
    protected string $interest = '';

    /** @var string */
    protected string $mergeField1 = '';

    /** @var string */
    protected string $mergeField2 = '';

    /** @var string */
    protected string $mergeField3 = '';

    /** @var string */
    protected string $mergeField4 = '';

    /** @var string */
    protected string $mergeField5 = '';

    /** @var string */
    protected string $mergeField6 = '';

    /** @var string */
    protected string $mergeField7 = '';

    /** @var string */
    protected string $mergeField8 = '';

    /** @var string */
    protected string $mergeField9 = '';

    /** @var string */
    protected string $mergeField10 = '';

    /** @var string */
    protected string $formName = '';

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return array
     */
    public function getInterests(): array
    {
        return $this->interests;
    }

    /**
     * @param array $interests
     */
    public function setInterests(array $interests): void
    {
        $this->interests = $interests;
    }

    /**
     * @return string
     */
    public function getInterest(): string
    {
        return $this->interest;
    }

    /**
     * @param string $interest
     */
    public function setInterest(string $interest): void
    {
        $this->interest = $interest;
    }

    /**
     * @return string
     */
    public function getMergeField1(): string
    {
        return $this->mergeField1;
    }

    /**
     * @param string $mergeField1
     */
    public function setMergeField1(string $mergeField1): void
    {
        $this->mergeField1 = $mergeField1;
    }

    /**
     * @return string
     */
    public function getMergeField2(): string
    {
        return $this->mergeField2;
    }

    /**
     * @param string $mergeField2
     */
    public function setMergeField2(string $mergeField2): void
    {
        $this->mergeField2 = $mergeField2;
    }

    /**
     * @return string
     */
    public function getMergeField3(): string
    {
        return $this->mergeField3;
    }

    /**
     * @param string $mergeField3
     */
    public function setMergeField3(string $mergeField3): void
    {
        $this->mergeField3 = $mergeField3;
    }

    /**
     * @return string
     */
    public function getMergeField4(): string
    {
        return $this->mergeField4;
    }

    /**
     * @param string $mergeField4
     */
    public function setMergeField4(string $mergeField4): void
    {
        $this->mergeField4 = $mergeField4;
    }

    /**
     * @return string
     */
    public function getMergeField5(): string
    {
        return $this->mergeField5;
    }

    /**
     * @param string $mergeField5
     */
    public function setMergeField5(string $mergeField5): void
    {
        $this->mergeField5 = $mergeField5;
    }

    /**
     * @return string
     */
    public function getMergeField6(): string
    {
        return $this->mergeField6;
    }

    /**
     * @param string $mergeField6
     */
    public function setMergeField6(string $mergeField6): void
    {
        $this->mergeField6 = $mergeField6;
    }

    /**
     * @return string
     */
    public function getMergeField7(): string
    {
        return $this->mergeField7;
    }

    /**
     * @param string $mergeField7
     */
    public function setMergeField7(string $mergeField7): void
    {
        $this->mergeField7 = $mergeField7;
    }

    /**
     * @return string
     */
    public function getMergeField8(): string
    {
        return $this->mergeField8;
    }

    /**
     * @param string $mergeField8
     */
    public function setMergeField8(string $mergeField8): void
    {
        $this->mergeField8 = $mergeField8;
    }

    /**
     * @return string
     */
    public function getMergeField9(): string
    {
        return $this->mergeField9;
    }

    /**
     * @param string $mergeField9
     */
    public function setMergeField9(string $mergeField9): void
    {
        $this->mergeField9 = $mergeField9;
    }

    /**
     * @return string
     */
    public function getMergeField10(): string
    {
        return $this->mergeField10;
    }

    /**
     * @param string $mergeField10
     */
    public function setMergeField10(string $mergeField10): void
    {
        $this->mergeField10 = $mergeField10;
    }

    /**
     * @return string
     */
    public function getFormName(): string
    {
        return $this->formName;
    }

    /**
     * @param string $formName
     */
    public function setFormName(string $formName): void
    {
        $this->formName = $formName;
    }

}
