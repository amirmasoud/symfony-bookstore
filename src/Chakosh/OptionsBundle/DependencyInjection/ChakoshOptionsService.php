<?php
namespace Chakosh\OptionsBundle\DependencyInjection;


use Doctrine\ORM\EntityManager;

/**
 * Description of ChakoshOptionsService
 *
 * @author amirmasoud
 */
class ChakoshOptionsService {
    protected $em;
    
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }
    
    /**
     * 
     * @param string option name
     * @return option value
     */
    public function getOption($name){
        //$this->em = new EntityManager();
        $option_value = $this->em->getRepository('ChakoshOptionsBundle:Options')->findOneBy(array('optionName'=>$name))->getOptionValue();
        print_r($option_value);
        return $option_value;
    }
    
    /**
     * 
     * @param string $slug
     * @param character $separator
     * @return slugged name
     */
    public function slug($slug, $separator){
        return implode($separator,explode(' ', $slug));   
    }
}
