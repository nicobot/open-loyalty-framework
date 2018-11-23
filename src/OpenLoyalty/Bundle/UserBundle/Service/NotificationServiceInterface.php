<?php
/*
 * Copyright © 2018 Divante, Inc. All rights reserved.
 * See LICENSE for license details.
 */

declare(strict_types=1);

namespace OpenLoyalty\Bundle\UserBundle\Service;

use OpenLoyalty\Component\Customer\Domain\ReadModel\InvitationDetails;

/**
 * Class NotificationService.
 */
interface NotificationServiceInterface
{
    /**
     * @param NotificationTransportInterface $transport
     */
    public function addTransport(NotificationTransportInterface $transport): void;

    /**
     * @param InvitationDetails $invitation
     */
    public function sendInvitation(InvitationDetails $invitation): void;
}
