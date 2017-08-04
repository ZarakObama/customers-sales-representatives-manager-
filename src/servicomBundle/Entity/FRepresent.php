<?php

namespace servicomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * FRepresent
 *
 * @ORM\Table(name="f_represent")
 * @ORM\Entity
 * @Vich\Uploadable
 */
class FRepresent extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="RE_No", type="integer", nullable=true)
     */
    private $reNo;

    /**
     * @var string
     *
     * @ORM\Column(name="RE_Nom", type="string", length=12, nullable=true)
     */
    private $reNom;

    /**
     * @var string
     *
     * @ORM\Column(name="RE_Prenom", type="string", length=9, nullable=true)
     */
    private $rePrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="RE_Region", type="string", length=9, nullable=true)
     */
    private $reRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="RE_Telephone", type="string", length=5, nullable=true)
     */
    private $reTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="RE_EMail", type="string", length=10, nullable=true)
     */
    private $reEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="RE_DateCreation", type="string", length=19, nullable=true)
     */
    private $reDatecreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;


    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName")
     *
     */
    private $imageFile;
    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     *
     * @var string
     */
    private $imageName;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     *
     * @var \DateTime
     */
    private $updatedAt;
    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return FRepresent
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;
        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
        return $this;
    }
    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }
    /**
     * @param string $imageName
     *
     * @return FRepresent
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getImageName()
    {
        return $this->imageName;
    }


}

