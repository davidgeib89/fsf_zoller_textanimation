<?php
namespace FREESIXTYFIVE\FsfZollerTextanimation\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author David Geib <d.geib@freesixtyfive.de>
 */
class TextAnimationControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \FREESIXTYFIVE\FsfZollerTextanimation\Controller\TextAnimationController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerTextanimation\Controller\TextAnimationController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllTextAnimationsFromRepositoryAndAssignsThemToView()
    {

        $allTextAnimations = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $textAnimationRepository = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerTextanimation\Domain\Repository\TextAnimationRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $textAnimationRepository->expects(self::once())->method('findAll')->will(self::returnValue($allTextAnimations));
        $this->inject($this->subject, 'textAnimationRepository', $textAnimationRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('textAnimations', $allTextAnimations);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
