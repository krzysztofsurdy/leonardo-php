<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace LeonardoAI\Model;

class MeGetResponse200UserDetailsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * columns and relationships of "users".
     *
     * @var MeGetResponse200UserDetailsItemUser|null
     */
    protected $user;
    /**
     * User Plan Token Renewal Date.
     *
     * @var string|null
     */
    protected $tokenRenewalDate;
    /**
     * Current balance of paid tokens the user has.
     *
     * @var int|null
     */
    protected $paidTokens;
    /**
     * Current balance of user plan subscription tokens the user has.
     *
     * @var int
     */
    protected $subscriptionTokens;
    /**
     * Current balance of user plan GPT tokens the user has.
     *
     * @var int
     */
    protected $subscriptionGptTokens;
    /**
     * Current balance of model training tokens the user has.
     *
     * @var int
     */
    protected $subscriptionModelTokens;
    /**
     * API Concurrency Slots.
     *
     * @var int
     */
    protected $apiConcurrencySlots;
    /**
     * Current balance of API paid tokens the user has.
     *
     * @var int|null
     */
    protected $apiPaidTokens;
    /**
     * Current balance of Enterprise API subscriptions tokens the user has.
     *
     * @var int
     */
    protected $apiSubscriptionTokens;
    /**
     * API Plan Token Renewal Date.
     *
     * @var string|null
     */
    protected $apiPlanTokenRenewalDate;

    /**
     * columns and relationships of "users".
     */
    public function getUser(): ?MeGetResponse200UserDetailsItemUser
    {
        return $this->user;
    }

    /**
     * columns and relationships of "users".
     */
    public function setUser(?MeGetResponse200UserDetailsItemUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }

    /**
     * User Plan Token Renewal Date.
     */
    public function getTokenRenewalDate(): ?string
    {
        return $this->tokenRenewalDate;
    }

    /**
     * User Plan Token Renewal Date.
     */
    public function setTokenRenewalDate(?string $tokenRenewalDate): self
    {
        $this->initialized['tokenRenewalDate'] = true;
        $this->tokenRenewalDate = $tokenRenewalDate;

        return $this;
    }

    /**
     * Current balance of paid tokens the user has.
     */
    public function getPaidTokens(): ?int
    {
        return $this->paidTokens;
    }

    /**
     * Current balance of paid tokens the user has.
     */
    public function setPaidTokens(?int $paidTokens): self
    {
        $this->initialized['paidTokens'] = true;
        $this->paidTokens = $paidTokens;

        return $this;
    }

    /**
     * Current balance of user plan subscription tokens the user has.
     */
    public function getSubscriptionTokens(): int
    {
        return $this->subscriptionTokens;
    }

    /**
     * Current balance of user plan subscription tokens the user has.
     */
    public function setSubscriptionTokens(int $subscriptionTokens): self
    {
        $this->initialized['subscriptionTokens'] = true;
        $this->subscriptionTokens = $subscriptionTokens;

        return $this;
    }

    /**
     * Current balance of user plan GPT tokens the user has.
     */
    public function getSubscriptionGptTokens(): int
    {
        return $this->subscriptionGptTokens;
    }

    /**
     * Current balance of user plan GPT tokens the user has.
     */
    public function setSubscriptionGptTokens(int $subscriptionGptTokens): self
    {
        $this->initialized['subscriptionGptTokens'] = true;
        $this->subscriptionGptTokens = $subscriptionGptTokens;

        return $this;
    }

    /**
     * Current balance of model training tokens the user has.
     */
    public function getSubscriptionModelTokens(): int
    {
        return $this->subscriptionModelTokens;
    }

    /**
     * Current balance of model training tokens the user has.
     */
    public function setSubscriptionModelTokens(int $subscriptionModelTokens): self
    {
        $this->initialized['subscriptionModelTokens'] = true;
        $this->subscriptionModelTokens = $subscriptionModelTokens;

        return $this;
    }

    /**
     * API Concurrency Slots.
     */
    public function getApiConcurrencySlots(): int
    {
        return $this->apiConcurrencySlots;
    }

    /**
     * API Concurrency Slots.
     */
    public function setApiConcurrencySlots(int $apiConcurrencySlots): self
    {
        $this->initialized['apiConcurrencySlots'] = true;
        $this->apiConcurrencySlots = $apiConcurrencySlots;

        return $this;
    }

    /**
     * Current balance of API paid tokens the user has.
     */
    public function getApiPaidTokens(): ?int
    {
        return $this->apiPaidTokens;
    }

    /**
     * Current balance of API paid tokens the user has.
     */
    public function setApiPaidTokens(?int $apiPaidTokens): self
    {
        $this->initialized['apiPaidTokens'] = true;
        $this->apiPaidTokens = $apiPaidTokens;

        return $this;
    }

    /**
     * Current balance of Enterprise API subscriptions tokens the user has.
     */
    public function getApiSubscriptionTokens(): int
    {
        return $this->apiSubscriptionTokens;
    }

    /**
     * Current balance of Enterprise API subscriptions tokens the user has.
     */
    public function setApiSubscriptionTokens(int $apiSubscriptionTokens): self
    {
        $this->initialized['apiSubscriptionTokens'] = true;
        $this->apiSubscriptionTokens = $apiSubscriptionTokens;

        return $this;
    }

    /**
     * API Plan Token Renewal Date.
     */
    public function getApiPlanTokenRenewalDate(): ?string
    {
        return $this->apiPlanTokenRenewalDate;
    }

    /**
     * API Plan Token Renewal Date.
     */
    public function setApiPlanTokenRenewalDate(?string $apiPlanTokenRenewalDate): self
    {
        $this->initialized['apiPlanTokenRenewalDate'] = true;
        $this->apiPlanTokenRenewalDate = $apiPlanTokenRenewalDate;

        return $this;
    }
}
