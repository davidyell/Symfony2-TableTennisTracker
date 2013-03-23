<?php
/**
 * Description of SideType
 *
 * @author David Yell <neon1024@gmail.com>
 */

namespace PingPong\Bundle\PlayerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * The add a side form
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
        return "pingpongplayerbundle_side_add";
    }

    /**
     * Build the form fields
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('players', 'entity', array(
                        'class' => 'PingPongPlayerBundle:Player',
                        'property' => 'firstName'
                    ));
    }

    /**
     * Set the default entity for this form
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