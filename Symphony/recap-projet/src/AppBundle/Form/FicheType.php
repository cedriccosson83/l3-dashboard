<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Projet;

class FicheType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('projet',EntityType::class,array(
			"label" => "Veuillez choisir un projet",
			"class" => Projet::class,
			"query_builder" => function (EntityRepository $er) {
				return $er
					->createQueryBuilder('p')
					->where('p.dateEnd >= :date')
					->setParameter('date', new \Datetime())
				;
			},
		))
		->add('manager',null,array("label" => "Veuillez choisir un manager"))
		->add('ficheDate',null,array("label" => "Date"))
		->add('nbDayDone',null,array("label" => "Nombre de jours passé"))
		->add('nbDaySold',null,array("label" => "Nombre de jours vendus"))
		->add('progression',null,array("label" => "Progression"))
		->add('comment',null,array("label" => "Commentaire"));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Fiche'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_fiche';
    }


}
