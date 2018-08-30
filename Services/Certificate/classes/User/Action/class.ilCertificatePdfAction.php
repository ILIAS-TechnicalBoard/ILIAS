<?php
/* Copyright (c) 1998-2018 ILIAS open source, Extended GPL, see docs/LICENSE */

/**
 * @author Niels Theen <ntheen@datbay.de>
 * @version	$Id$
 * @ingroup Services/Certificates
 */
class ilCertificatePdfAction
{
	/**
	 * @var ilLogger
	 */
	private $logger;

	/**
	 * @var ilPdfGenerator
	 */
	private $pdfGenerator;

	/**
	 * @param ilLogger $logger
	 * @param ilPdfGenerator $pdfGenerator
	 */
	public function __construct(ilLogger $logger, ilPdfGenerator $pdfGenerator)
	{
		$this->logger = $logger;
		$this->pdfGenerator = $pdfGenerator;
	}

	/**
	 * @param integer $userId
	 * @param integer $objectId
	 * @throws ilException
	 */
	public function downloadPdf(int $userId, int $objectId)
	{
		$this->logger->info(sprintf('Start download certificate PDF for user: "%s" object id; "%s"', $userId, $objectId));

		$pdfScalar = $this->pdfGenerator->generateCurrentActiveCertificate($userId, $objectId);

		ilUtil::deliverData(
			$pdfScalar,
			'certificate.pdf',
			'application/pdf'
		);
	}
}
