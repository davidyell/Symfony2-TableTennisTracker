<?php
/**
 * Form of PlayerType
 *
 * @author David Yell <neon1024@gmail.com>
 */
namespace PingPong\Bundle\PlayerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Player Type of Form
 */
class PlayerType extends AbstractType
{
    /**
     * The name of this form type
     *
     * @return string
     */
    public function getName()
    {
        return "pingpongplayerbundle_player_add";
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', 'text', array(
                    'label' => 'First name'
                ))
                ->add('nickName', 'text', array(
                    'required' => false
                ))
                ->add('lastName', 'text', array(
                    'label' => 'Last name'
                ))
                ->add('email')
                ->add('facebookId', 'text', array(
                    'label' => 'Facebook page name or Id',
                    'required' => false
                ))
                ->add('department', 'entity', array(
                    'class' => 'PingPongPlayerBundle:Department',
                    'property' => 'name'
                ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PingPong\Bundle\PlayerBundle\Entity\Player'
        ));
    }

}