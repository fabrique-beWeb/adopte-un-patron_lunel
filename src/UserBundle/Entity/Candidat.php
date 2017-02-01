<?php

namespace UserBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Serializable;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints\File;


/**
 * Candidat
 *
 * @ORM\Table(name="candidat")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\CandidatRepository")
 */
class Candidat implements UserInterface, Serializable {
    function __construct() {
        $this->nomSkill = new ArrayCollection();
        }

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
     * @var DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255, nullable=true)
     */
    private $adress;

    /**
     * @var int
     *
     * @ORM\Column(name="codePostal", type="integer", nullable=true)
     */
    private $codePostal;

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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="dateInscription", type="string")
     */
    private $dateInscription;

    /**
     * @var UploadedFile
     *
     * @ORM\Column(name="image", type="string", length=512)
     * @File(mimeTypes={"image/jpg","image/jpeg","image/png"})
     */
    private $image;

    /**
     * @var array
     *
     * @ORM\Column(name="posteRecherche", type="array", nullable=true)
     */
    private $posteRecherche;

    /**
     * @var array
     *
     * @ORM\Column(name="rencontreRecruteur", type="array", nullable=true)
     */
    private $rencontreRecruteur;
    
        /**
     * @var array
     *
     * @ORM\Column(name="role", type="array")
     */
    private $role;
    
    /**
     * @var array
     *
     * @ManyToMany(targetEntity="Skill", mappedBy="candidates")
     */
    private $nomSkill;


    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Candidat
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Candidat
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param DateTime $dateNaissance
     *
     * @return Candidat
     */
    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return DateTime
     */
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Candidat
     */
    public function setAge($age) {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Candidat
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Candidat
     */
    public function setAdress($adress) {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress() {
        return $this->adress;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return Candidat
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return int
     */
    public function getCodePostal() {
        return $this->codePostal;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Candidat
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Candidat
     */
    public function setMdp($mdp) {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp() {
        return $this->mdp;
    }

    /**
     * Set visite
     *
     * @param integer $visite
     *
     * @return Candidat
     */
    public function setVisite($visite) {
        $this->visite = $visite;

        return $this;
    }

    /**
     * Get visite
     *
     * @return int
     */
    public function getVisite() {
        return $this->visite;
    }

    /**
     * Set favori
     *
     * @param integer $favori
     *
     * @return Candidat
     */
    public function setFavori($favori) {
        $this->favori = $favori;

        return $this;
    }

    /**
     * Get favori
     *
     * @return int
     */
    public function getFavori() {
        return $this->favori;
    }

    /**
     * Set matchs
     *
     * @param integer $matchs
     *
     * @return Candidat
     */
    public function setMatchs($matchs) {
        $this->matchs = $matchs;

        return $this;
    }

    /**
     * Get matchs
     *
     * @return int
     */
    public function getMatchs() {
        return $this->matchs;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Candidat
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set dateInscription
     *
     * @param string $dateInscription
     *
     * @return Candidat
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
     * Set image
     *
     * @param string $image
     *
     * @return Candidat
     */
    public function setImage($image) {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * Set posteRecherche
     *
     * @param array $posteRecherche
     *
     * @return Candidat
     */
    public function setPosteRecherche($posteRecherche) {
        $this->posteRecherche = $posteRecherche;

        return $this;
    }

    /**
     * Get posteRecherche
     *
     * @return array
     */
    public function getPosteRecherche() {
        return $this->posteRecherche;
    }

    /**
     * Set rencontreRecruteur
     *
     * @param array $rencontreRecruteur
     *
     * @return Candidat
     */
    public function setRencontreRecruteur($rencontreRecruteur) {
        $this->rencontreRecruteur = $rencontreRecruteur;

        return $this;
    }

    /**
     * Get rencontreRecruteur
     *
     * @return array
     */
    public function getRencontreRecruteur() {
        return $this->rencontreRecruteur;
    }
    
    /**
     * Set role
     *
     * @param array $role
     *
     * @return Candidat
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
     * Set nomSkill
     *
     * @param array $nomSkill
     *
     * @return Candidat
     */
    public function setNomSkill($nomSkill) {
        $this->nomSkill = $nomSkill;

        return $this;
    }

    /**
     * Get nomSkill
     *
     * @return array
     */
    public function getNomSkill() {
        return $this->nomSkill;
    }

    public function eraseCredentials() {
        
    }

    public function getPassword(): string {
        return $this->mdp;
    }

    public function getRoles() {
        return array();
    }

    public function getSalt() {
        
    }

    public function getUsername(): string {
        return $this->email;
    }

    public function serialize(): string {
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

}
