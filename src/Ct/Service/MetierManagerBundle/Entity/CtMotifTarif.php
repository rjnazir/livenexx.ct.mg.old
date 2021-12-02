<?php

namespace Ct\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtMotifTarif
 *
 * @ORM\Table(name="ct_motif_tarif", indexes={@ORM\Index(name="fk_ct_motif_tarif_ct_motif1_idx", columns={"ct_motif_id"})},
 *     uniqueConstraints={@ORM\UniqueConstraint(name="uk_ct_motif_ct_mtf_trf_date", columns={"mtf_trf_date", "ct_motif_id"})})
 * @ORM\Entity
 */
class CtMotifTarif
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="mtf_trf_prix", type="float", precision=10, scale=0, nullable=true)
     */
    private $mtfTrfPrix;

    /**
     * @var string
     *
     * @ORM\Column(name="mtf_trf_date", type="string", length=4, nullable=true)
     */
    private $mtfTrfDate;

    /**
     * @var \CtMotif
     *
     * @ORM\ManyToOne(targetEntity="CtMotif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ct_motif_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $ctMotif;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mtfTrfPrix
     *
     * @param float $mtfTrfPrix
     *
     * @return CtMotifTarif
     */
    public function setMtfTrfPrix($mtfTrfPrix)
    {
        $this->mtfTrfPrix = $mtfTrfPrix;

        return $this;
    }

    /**
     * Get mtfTrfPrix
     *
     * @return float
     */
    public function getMtfTrfPrix()
    {
        return $this->mtfTrfPrix;
    }

    /**
     * Set ctMotif
     *
     * @param \Ct\Service\MetierManagerBundle\Entity\CtMotif $ctMotif
     *
     * @return CtMotifTarif
     */
    public function setCtMotif(\Ct\Service\MetierManagerBundle\Entity\CtMotif $ctMotif = null)
    {
        $this->ctMotif = $ctMotif;

        return $this;
    }

    /**
     * Get ctMotif
     *
     * @return \Ct\Service\MetierManagerBundle\Entity\CtMotif
     */
    public function getCtMotif()
    {
        return $this->ctMotif;
    }

    /**
     * Set mtfTrfDate
     *
     * @param string $mtfTrfDate
     *
     * @return CtMotifTarif
     */
    public function setMtfTrfDate($mtfTrfDate)
    {
        $this->mtfTrfDate = $mtfTrfDate;

        return $this;
    }

    /**
     * Get mtfTrfDate
     *
     * @return string
     */
    public function getMtfTrfDate()
    {
        return $this->mtfTrfDate;
    }
}
