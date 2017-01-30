<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListeDeSkill
 *
 * @ORM\Table(name="liste_de_skill")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\ListeDeSkillRepository")
 */
class ListeDeSkill
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
     * @var array
     * @ORM\Column(name="skill", type="string")
     *
     */
    private $skills;

    
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
     * Set skills
     *
     * @param array $skills
     *
     * @return ListeDeSkill
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * Get skills
     *
     * @return array
     */
    public function getSkills()
    {
        return $this->skills;
    }
}

