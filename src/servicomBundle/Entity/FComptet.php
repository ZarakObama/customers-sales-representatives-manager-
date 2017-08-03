<?php

namespace servicomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FComptet
 *
 * @ORM\Table(name="f_comptet")
 * @ORM\Entity
 */
class FComptet
{
    /**
     * @var string
     *
     * @ORM\Column(name="gouvernorat", type="string", length=16, nullable=true)
     */
    private $gouvernorat;
    /**
     * @var string
     *
     * @ORM\Column(name="delegation", type="string", length=16, nullable=true)
     */
    private $delegation;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=16, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="derniere_modif", type="date", nullable=true)
     */
    private $derniere_modif;
    /**
     * @var string
     *
     * @ORM\Column(name="CT_NUM", type="string", length=16, nullable=true)
     */
    private $ctNum;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Intitule", type="string", length=35, nullable=true)
     */
    private $ctIntitule;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Type", type="string", length=21, nullable=true)
     */
    private $ctType;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Contact", type="string", length=49, nullable=true)
     */
    private $ctContact;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Adresse", type="string", length=58, nullable=true)
     */
    private $ctAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Complement", type="string", length=42, nullable=true)
     */
    private $ctComplement;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_CodePostal", type="string", length=34, nullable=true)
     */
    private $ctCodepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Ville", type="string", length=35, nullable=true)
     */
    private $ctVille;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_CodeRegion", type="string", length=31, nullable=true)
     */
    private $ctCoderegion;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_DateCreate", type="date", length=19, nullable=true)
     */
    private $ctDatecreate;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Telephone", type="string", length=21, nullable=true)
     */
    private $ctTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Telephone1", type="string", length=21, nullable=true)
     */
    private $ctTelephone1;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Telephone2", type="string", length=35, nullable=true)
     */
    private $ctTelephone2;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Telecopie", type="string", length=28, nullable=true)
     */
    private $ctTelecopie;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_EMail", type="string", length=45, nullable=true)
     */
    private $ctEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Site", type="string", length=32, nullable=true)
     */
    private $ctSite;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return string
     */
    public function getGouvernorat()
    {
        return $this->gouvernorat;
    }

    /**
     * @param string $gouvernorat
     */
    public function setGouvernorat($gouvernorat)
    {
        $this->gouvernorat = $gouvernorat;
    }

    /**
     * @return string
     */
    public function getDelegation()
    {
        return $this->delegation;
    }

    /**
     * @param string $delegation
     */
    public function setDelegation($delegation)
    {
        $this->delegation = $delegation;
    }

    /**
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return string
     */
    public function getDerniereModif()
    {
        return $this->derniere_modif;
    }

    /**
     * @param string $derniere_modif
     */
    public function setDerniereModif($derniere_modif)
    {
        $this->derniere_modif = $derniere_modif;
    }

    /**
     * @return string
     */
    public function getCtNum()
    {
        return $this->ctNum;
    }

    /**
     * @param string $ctNum
     */
    public function setCtNum($ctNum)
    {
        $this->ctNum = $ctNum;
    }

    /**
     * @return string
     */
    public function getCtIntitule()
    {
        return $this->ctIntitule;
    }

    /**
     * @param string $ctIntitule
     */
    public function setCtIntitule($ctIntitule)
    {
        $this->ctIntitule = $ctIntitule;
    }

    /**
     * @return string
     */
    public function getCtType()
    {
        return $this->ctType;
    }

    /**
     * @param string $ctType
     */
    public function setCtType($ctType)
    {
        $this->ctType = $ctType;
    }

    /**
     * @return string
     */
    public function getCtContact()
    {
        return $this->ctContact;
    }

    /**
     * @param string $ctContact
     */
    public function setCtContact($ctContact)
    {
        $this->ctContact = $ctContact;
    }

    /**
     * @return string
     */
    public function getCtAdresse()
    {
        return $this->ctAdresse;
    }

    /**
     * @param string $ctAdresse
     */
    public function setCtAdresse($ctAdresse)
    {
        $this->ctAdresse = $ctAdresse;
    }

    /**
     * @return string
     */
    public function getCtComplement()
    {
        return $this->ctComplement;
    }

    /**
     * @param string $ctComplement
     */
    public function setCtComplement($ctComplement)
    {
        $this->ctComplement = $ctComplement;
    }

    /**
     * @return string
     */
    public function getCtCodepostal()
    {
        return $this->ctCodepostal;
    }

    /**
     * @param string $ctCodepostal
     */
    public function setCtCodepostal($ctCodepostal)
    {
        $this->ctCodepostal = $ctCodepostal;
    }

    /**
     * @return string
     */
    public function getCtVille()
    {
        return $this->ctVille;
    }

    /**
     * @param string $ctVille
     */
    public function setCtVille($ctVille)
    {
        $this->ctVille = $ctVille;
    }

    /**
     * @return string
     */
    public function getCtCoderegion()
    {
        return $this->ctCoderegion;
    }

    /**
     * @param string $ctCoderegion
     */
    public function setCtCoderegion($ctCoderegion)
    {
        $this->ctCoderegion = $ctCoderegion;
    }

    /**
     * @return string
     */
    public function getCtDatecreate()
    {
        return $this->ctDatecreate;
    }

    /**
     * @param string $ctDatecreate
     */
    public function setCtDatecreate($ctDatecreate)
    {
        $this->ctDatecreate = $ctDatecreate;
    }

    /**
     * @return string
     */
    public function getCtTelephone()
    {
        return $this->ctTelephone;
    }

    /**
     * @param string $ctTelephone
     */
    public function setCtTelephone($ctTelephone)
    {
        $this->ctTelephone = $ctTelephone;
    }

    /**
     * @return string
     */
    public function getCtTelephone1()
    {
        return $this->ctTelephone1;
    }

    /**
     * @param string $ctTelephone1
     */
    public function setCtTelephone1($ctTelephone1)
    {
        $this->ctTelephone1 = $ctTelephone1;
    }

    /**
     * @return string
     */
    public function getCtTelephone2()
    {
        return $this->ctTelephone2;
    }

    /**
     * @param string $ctTelephone2
     */
    public function setCtTelephone2($ctTelephone2)
    {
        $this->ctTelephone2 = $ctTelephone2;
    }

    /**
     * @return string
     */
    public function getCtTelecopie()
    {
        return $this->ctTelecopie;
    }

    /**
     * @param string $ctTelecopie
     */
    public function setCtTelecopie($ctTelecopie)
    {
        $this->ctTelecopie = $ctTelecopie;
    }

    /**
     * @return string
     */
    public function getCtEmail()
    {
        return $this->ctEmail;
    }

    /**
     * @param string $ctEmail
     */
    public function setCtEmail($ctEmail)
    {
        $this->ctEmail = $ctEmail;
    }

    /**
     * @return string
     */
    public function getCtSite()
    {
        return $this->ctSite;
    }

    /**
     * @param string $ctSite
     */
    public function setCtSite($ctSite)
    {
        $this->ctSite = $ctSite;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}

