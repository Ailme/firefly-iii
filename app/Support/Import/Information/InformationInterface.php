<?php
/**
 * InformationInterface.php
 * Copyright (c) 2017 thegrumpydictator@gmail.com
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

declare(strict_types=1);

namespace FireflyIII\Support\Import\Information;

use FireflyIII\User;
use Illuminate\Support\Collection;

/**
 * Interface InformationInterface
 *
 * @package FireflyIII\Support\Import\Information
 */
interface InformationInterface
{

    /**
     * Set the user for this Prerequisites-routine. Class is expected to implement and save this.
     *
     * @param User $user
     */
    public function setUser(User $user): void;

    /**
     * Returns a collection of accounts. Preferrably, these follow a uniform Firefly III format so they can be managed over banks.
     *
     * @return Collection
     */
    public function getAccounts(): Collection;
}