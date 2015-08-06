<?php
namespace Chakosh\BlogBundle\Entity;

use Symfony\Component\Finder\Finder;
use Doctrine\ORM\EntityRepository;

class BookRepository extends EntityRepository
{
    public function findAllOrderedById()
    {
        return $this->getEntityManager()
                        ->createQuery(
                            'SELECT p FROM ChakoshBlogBundle:Book p ORDER BY p.name ASC'
                        )
                        ->getResult();
    }
    public function findOneByIdJoinedToCategory($id)
    {
        $query = $this->getEntityManager()
                    ->createQuery('
                        SELECT b, c FROM ChakoshBlogBundle:Book b
                        JOIN b.category c
                        WHERE b.id = :id'
                    )->setParameter('id', $id);
        try{
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e){
            return null;
        }
    }
    public function fetchByBookId($id)
    {
        return $this->createQueryBuilder('b')
                ->leftJoin('b.book', $alias)
            
            ->leftJoin('b.book','phm')
            ->leftJoin('phm.name','b')
            ->where('b.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }
    public function uploaded_files()
    {
            
        $UploadRootDir = __DIR__.'/../../../../web/uploads';
        $files = array();
        if ($handle = opendir($UploadRootDir)) {
            // This is the correct way to loop over the directory.
            while (false !== ($entry = readdir($handle))) 
            {
                if($entry != "." && $entry != "..")
                {
                    $files[] = $entry;
                }
            }
            closedir($handle);
        }
        
        return $files;
    }

}