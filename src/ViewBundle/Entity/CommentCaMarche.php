<?php

namespace ViewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentCaMarche
 *
 * @ORM\Table(name="comment_ca_marche")
 * @ORM\Entity(repositoryClass="ViewBundle\Repository\CommentCaMarcheRepository")
 */
class CommentCaMarche
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=255)
     */
    private $Title;
    
    /**
     * @var string
     *
     * @ORM\Column(name="LeftTitle", type="string", length=255)
     */
    private $leftTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="LeftText", type="string", length=255)
     */
    private $leftText;

    /**
     * @var string
     *
     * @ORM\Column(name="MidTitle", type="string", length=255)
     */
    private $midTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="MidText", type="string", length=255)
     */
    private $midText;

    /**
     * @var string
     *
     * @ORM\Column(name="RightTitle", type="string", length=255)
     */
    private $rightTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="RightText", type="string", length=255)
     */
    private $rightText;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Title
     *
     * @param string $Title
     *
     * @return CommentCaMarche
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;

        return $this;
    }

    /**
     * Get Title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }
    public function setLeftTitle($leftTitle)
    {
        $this->leftTitle = $leftTitle;

        return $this;
    }

    /**
     * Get leftTitle
     *
     * @return string
     */
    public function getLeftTitle()
    {
        return $this->leftTitle;
    }

    /**
     * Set leftText
     *
     * @param string $leftText
     *
     * @return CommentCaMarche
     */
    public function setLeftText($leftText)
    {
        $this->leftText = $leftText;

        return $this;
    }

    /**
     * Get leftText
     *
     * @return string
     */
    public function getLeftText()
    {
        return $this->leftText;
    }

    /**
     * Set midTitle
     *
     * @param string $midTitle
     *
     * @return CommentCaMarche
     */
    public function setMidTitle($midTitle)
    {
        $this->midTitle = $midTitle;

        return $this;
    }

    /**
     * Get midTitle
     *
     * @return string
     */
    public function getMidTitle()
    {
        return $this->midTitle;
    }

    /**
     * Set midText
     *
     * @param string $midText
     *
     * @return CommentCaMarche
     */
    public function setMidText($midText)
    {
        $this->midText = $midText;

        return $this;
    }

    /**
     * Get midText
     *
     * @return string
     */
    public function getMidText()
    {
        return $this->midText;
    }

    /**
     * Set rightTitle
     *
     * @param string $rightTitle
     *
     * @return CommentCaMarche
     */
    public function setRightTitle($rightTitle)
    {
        $this->rightTitle = $rightTitle;

        return $this;
    }

    /**
     * Get rightTitle
     *
     * @return string
     */
    public function getRightTitle()
    {
        return $this->rightTitle;
    }

    /**
     * Set rightText
     *
     * @param string $rightText
     *
     * @return CommentCaMarche
     */
    public function setRightText($rightText)
    {
        $this->rightText = $rightText;

        return $this;
    }

    /**
     * Get rightText
     *
     * @return string
     */
    public function getRightText()
    {
        return $this->rightText;
    }
}

