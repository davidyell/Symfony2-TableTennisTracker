<?php
/**
 * SideType form
 *
 * @author David Yell <neon1024@gmail.com>
 */

namespace PingPong\Bundle\PlayerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Side form object
 */
class SideType extends AbstractType
{
    /**
     * Return the name of the form
     *
     * @return string
     */
    public function getName()
    {
        return "pingpongplayerbundle_side";
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('match')
                ->add('players', 'entity', array(
                    'class' => 'PingPongPlayerBundle:Player',
                    'property' => 'shortName'
                ))
                ->add('result', 'integer');
    }

    /**
     * Set the default class
     *
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PingPong\Bundle\PlayerBundle\Entity\Side'
        ));
    }

}
