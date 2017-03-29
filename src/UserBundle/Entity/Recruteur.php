<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Serializable;
use Symfony\Component\Security\Core\User\UserInterface;
use UserBundle\Repository\RecruteurRepository;

/**
 * Recruteur
 *
 * @ORM\Table(name="adopteUnPatron_recruteur")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\RecruteurRepository")
 */
class Recruteur implements UserInterface, Serializable
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="entreprise", type="string", length=255)
     */
    private $entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=255)
     */
    private $mdp;

    /**
     * @var int
     *
     * @ORM\Column(name="codePostal", type="integer", nullable=true)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=512, nullable=true)
     */
    private $logo;

    /**
     * @var int
     *
     * @ORM\Column(name="visite", type="integer", nullable=true)
     */
    private $visite;

    /**
     * @var int
     *
     * @ORM\Column(name="favori", type="integer", nullable=true)
     */
    private $favori;

    /**
     * @var int
     *
     * @ORM\Column(name="matchs", type="integer", nullable=true)
     */
    private $matchs;

    /**
     * @var array
     *
     * @ORM\Column(name="role", type="array")
     */
    private $role;

    /**
     * @var array
     *
     * @ORM\Column(name="souhaitCandidat", type="array", nullable=true)
     */
    private $souhaitCandidat;
    
    /**
     * @var string
     *
     * @ORM\Column(name="$dateInscription", type="string")
     */
    private $dateInscription;

    /**
     * @var array
     * 
     * @ORM\ManyToMany(targetEntity="Candidat", mappedBy="candidats")
     */
    private $candidats;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Recruteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Recruteur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set entreprise
     *
     * @param string $entreprise
     *
     * @return Recruteur
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Recruteur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Recruteur
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return Recruteur
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return int
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Recruteur
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Recruteur
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set visite
     *
     * @param integer $visite
     *
     * @return Recruteur
     */
    public function setVisite($visite)
    {
        $this->visite = $visite;

        return $this;
    }

    /**
     * Get visite
     *
     * @return int
     */
    public function getVisite()
    {
        return $this->visite;
    }

    /**
     * Set favori
     *
     * @param integer $favori
     *
     * @return Recruteur
     */
    public function setFavori($favori)
    {
        $this->favori = $favori;

        return $this;
    }

    /**
     * Get favori
     *
     * @return int
     */
    public function getFavori()
    {
        return $this->favori;
    }

    /**
     * Set matchs
     *
     * @param integer $matchs
     *
     * @return Recruteur
     */
    public function setMatchs($matchs)
    {
        $this->matchs = $matchs;

        return $this;
    }

    /**
     * Get matchs
     *
     * @return int
     */
    public function getMatchs()
    {
        return $this->matchs;
    }

    /**
     * Set role
     *
     * @param array $role
     *
     * @return Recruteur
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return array
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set souhaitCandidat
     *
     * @param array $souhaitCandidat
     *
     * @return Recruteur
     */
    public function setSouhaitCandidat($souhaitCandidat)
    {
        $this->souhaitCandidat = $souhaitCandidat;

        return $this;
    }
    
        /**
     * Set dateInscription
     *
     * @param string $dateInscription
     *
     * @return Recruteur
     */
    public function setDateInscription($dateInscription) {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return string
     */
    public function getDateInscription() {
        return $this->dateInscription;
    }


    /**
     * Get souhaitCandidat
     *
     * @return array
     */
    public function getSouhaitCandidat()
    {
        return $this->souhaitCandidat;
    }
    
    /**
     * Set candidats
     *
     * @param array $candidats
     *
     * @return Recruteur
     */
    public function setCandidats($candidats)
    {
        $this->candidats = $candidats;

        return $this;
    }

    /**
     * Get candidats
     *
     * @return array
     */
    public function getCandidats()
    {
        return $this->candidats;
    }

    public function eraseCredentials() {
        
    }

    public function getPassword() {
        return $this->mdp;
    }

    public function getRoles() {
        return $this->role;
    }

    public function getSalt() {
        
    }

    public function getUsername() {
        return $this->email;
    }

    public function serialize() {
        return serialize(array(
            $this->id,
            $this->email,
            $this->mdp
        ));
    }

    public function unserialize($serialized) {
        list(
        $this->id,
        $this->email,
        $this->mdp
        ) = unserialize($serialized);
    }
    public function __toString() {
        return $this->entreprise;
    }

}

