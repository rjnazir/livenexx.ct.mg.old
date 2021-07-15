<?php

namespace Ct\Service\MetierManagerBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Ct\Service\MetierManagerBundle\Entity\CtCentre;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CtBordereauType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('blNumero', TextType::class, array(
                'label'     => 'N° du bordereau',
                'required'  => true
            ))
            ->add('blDebutNumero', IntegerType::class, array(
                'label'     => 'Début N° imprimé technique',
                'required'  => true
            ))
            ->add('blFinNumero', IntegerType::class, array(
                'label'     => 'Fin N° imprimé technique'
            ))
            ->add('ctCentre', EntityType::class, array(
                'label'     => 'Centre destinataire',
                'required'  => true,
                'class'         => 'Ct\Service\MetierManagerBundle\Entity\CtCentre',
                'query_builder' => function (EntityRepository $_er) {
                    return $_er
                        ->createQueryBuilder('c')
                        ->orderBy('c.ctrNom', 'ASC');
                },
                'group_by'     => function (CtCentre $_centre) {
                    if ($_centre->getCtProvince())
                        return $_centre->getCtProvince()->getPrvNom();
                },
                'choice_value'  => 'id',
                'choice_label'  => 'ctrNom',
                'multiple'      => false,
                'expanded'      => false,
                'placeholder'   => '- Séléctionner Centre -'
            ))
            ->add('ctImprimeTech', EntityType::class, array(
                'label'     => 'Type imprimé technique',
                'required'  => true,
                'class'         => 'Ct\Service\MetierManagerBundle\Entity\CtImprimeTech',
                'query_builder' => function (EntityRepository $_er) {
                    return $_er
                        ->createQueryBuilder('prtt')
                        ->orderBy('prtt.nomImprimeTech', 'ASC');
                },
                'choice_value'  => 'id',
                'choice_label'  => 'nomImprimeTech',
                'multiple'      => false,
                'expanded'      => false,
                'placeholder'   => '- Séléctionner Imprimé Technique -'
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ct\Service\MetierManagerBundle\Entity\CtBordereau'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ct_service_metiermanagerbundle_ctbordereau';
    }


}
