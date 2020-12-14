<?php
namespace FREESIXTYFIVE\FsfZollerTextanimation\Controller;


/***
 *
 * This file is part of the "Zoller Text Animation Background" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 David Geib <d.geib@freesixtyfive.de>, FREESIXTYFIVE
 *
 ***/
/**
 * TextAnimationController
 */
class TextAnimationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * textAnimationRepository
     * 
     * @var \FREESIXTYFIVE\FsfZollerTextanimation\Domain\Repository\TextAnimationRepository
     */
    protected $textAnimationRepository = null;

    /**
     * @param \FREESIXTYFIVE\FsfZollerTextanimation\Domain\Repository\TextAnimationRepository $textAnimationRepository
     */
    public function injectTextAnimationRepository(\FREESIXTYFIVE\FsfZollerTextanimation\Domain\Repository\TextAnimationRepository $textAnimationRepository)
    {
        $this->textAnimationRepository = $textAnimationRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $textAnimations = $this->textAnimationRepository->findAll();
        $this->view->assign('textAnimations', $textAnimations);
    }
}
