<?php

namespace OffreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="adopteUnPatron_offre")
 * @ORM\Entity(repositoryClass="OffreBundle\Repository\OffreRepository")
 */
class Offre {

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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEntreprise", type="string", length=255)
     */
    private $nomEntreprise;

    /**
     * @var array
     *
     * @ORM\Column(name="nomSkill", type="array")
     */
    private $nomSkill;

    /**
     * @var string
     *
     * @ORM\Column(name="poste", type="string", length=255)
     */
    private $poste;

    /**
     * @var string
     *
     * @ORM\Column(name="typeContrat", type="string", length=255)
     */
    private $typeContrat;

    /**
     * @var int
     *
     * @ORM\Column(name="salaire", type="integer")
     */
    private $salaire;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="experienceRequis", type="string", length=255)
     */
    private $experienceRequis;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=true)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="responsabilites", type="string", length=255)
     */
    private $responsabilites;

    /**
     * @var string
     *
     * @ORM\Column(name="pourquoiNous", type="string", length=255)
     */
    private $pourquoiNous;

    /**
     * @var string
     *
     * @ORM\Column(name="nousTrouver", type="string", length=512, nullable=true)
     */
    private $nousTrouver;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Recruteur")
     * @ORM\JoinColumn(name="fk_user", referencedColumnName="id")
     */
    private $userId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Offre
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set nomEntreprise
     *
     * @param string $nomEntreprise
     *
     * @return Offre
     */
    public function setNomEntreprise($nomEntreprise) {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Get nomEntreprise
     *
     * @return string
     */
    public function getNomEntreprise() {
        return $this->nomEntreprise;
    }

    /**
     * Set nomSkill
     *
     * @param array $nomSkill
     *
     * @return Offre
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

    /**
     * Set poste
     *
     * @param string $poste
     *
     * @return Offre
     */
    public function setPoste($poste) {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return string
     */
    public function getPoste() {
        return $this->poste;
    }

    /**
     * Set typeContrat
     *
     * @param string $typeContrat
     *
     * @return Offre
     */
    public function setTypeContrat($typeContrat) {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    /**
     * Get typeContrat
     *
     * @return string
     */
    public function getTypeContrat() {
        return $this->typeContrat;
    }

    /**
     * Set salaire
     *
     * @param integer $salaire
     *
     * @return Offre
     */
    public function setSalaire($salaire) {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return int
     */
    public function getSalaire() {
        return $this->salaire;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Offre
     */
    public function setDuree($duree) {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree() {
        return $this->duree;
    }

    /**
     * Set experienceRequis
     *
     * @param string $experienceRequis
     *
     * @return Offre
     */
    public function setExperienceRequis($experienceRequis) {
        $this->experienceRequis = $experienceRequis;

        return $this;
    }

    /**
     * Get experienceRequis
     *
     * @return string
     */
    public function getExperienceRequis() {
        return $this->experienceRequis;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Offre
     */
    public function setLieu($lieu) {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu() {
        return $this->lieu;
    }

    /**
     * Set responsabilites
     *
     * @param string $responsabilites
     *
     * @return Offre
     */
    public function setResponsabilites($responsabilites) {
        $this->responsabilites = $responsabilites;

        return $this;
    }

    /**
     * Get responsabilites
     *
     * @return string
     */
    public function getResponsabilites() {
        return $this->responsabilites;
    }

    /**
     * Set pourquoiNous
     *
     * @param string $pourquoiNous
     *
     * @return Offre
     */
    public function setPourquoiNous($pourquoiNous) {
        $this->pourquoiNous = $pourquoiNous;

        return $this;
    }

    /**
     * Get pourquoiNous
     *
     * @return string
     */
    public function getPourquoiNous() {
        return $this->pourquoiNous;
    }

    /**
     * Set nousTrouver
     *
     * @param string $nousTrouver
     *
     * @return Offre
     */
    public function setNousTrouver($nousTrouver) {
        $this->nousTrouver = $nousTrouver;

        return $this;
    }

    /**
     * Get nousTrouver
     *
     * @return string
     */
    public function getNousTrouver() {
        return $this->nousTrouver;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Offre
     */
    public function setUserId($userId) {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId() {
        return $this->userId;
    }

}
