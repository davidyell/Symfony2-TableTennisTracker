<?php
/**
 * Description of MatchType
 *
 * @author David Yell <neon1024@gmail.com>
 */

namespace PingPong\Bundle\PlayerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * The match form
 */
class MatchType extends AbstractType
{
    /**
     * The name of this form
     *
     * @return string
     */
    public function getName()
    {
        return "pingpongplayerbundle_match_add";
    }

    /**
     * Build the form fields
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('type', 'entity', array(
                    'class' => 'PingPongPlayerBundle:MatchType',
                    'property' => 'name'
                ))
                ->add('notes')
                ->add('sides', 'collection', array(
                    'type' => new SideType(),
                    'allow_add' => true,
                    'by_reference' => false,
                ));
    }

    /**
     * Set the default name for the form
     *
     * @param \Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PingPong\Bundle\PlayerBundle\Entity\Match'
        ));
    }

}