<?php

namespace UserBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use UserBundle\Entity\User;

class UserData  extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{

    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }


    public function load(ObjectManager $manager)
    {

        $etudiant1 = new User();
        $etudiant1->setUsername('2karnaud');
        $etudiant1->setEmail('2karnaud@gmail.com');
        $etudiant1->setPassword('versus');
        $etudiant1->setRoles(array('ROLE_Etudiant'));
        $etudiant1->setEnabled('1');
        $etudiant1->setSalt(md5(uniqid()));
        // the 'security.password_encoder' service requires Symfony 2.6 or higher
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($etudiant1, 'versus');
        $etudiant1->setPassword($password);
        $manager->persist($etudiant1);

        $etudiant2 = new User();
        $etudiant2->setUsername('yesart');
        $etudiant2->setEmail('yesart@hotmail.com');
        $etudiant2->setPassword('versus');
        $etudiant2->setRoles(array('ROLE_Etudiant'));
        $etudiant2->setEnabled('1');
        $etudiant2->setSalt(md5(uniqid()));
   
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($etudiant2, 'versus');
        $etudiant2->setPassword($password);
        $manager->persist($etudiant2);

      /*  $etudiant3 = new User();
        $etudiant3->setUsername('artnok');
        $etudiant3->setEmail('artnok@yahoo.com');
        $etudiant3->setPassword('versus');
        $etudiant3->setRoles(array('ROLE_Etudiant'));
        $etudiant3->setEnabled('1');
        $etudiant3->setSalt(md5(uniqid()));
   
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($etudiant3, 'versus');
        $etudiant3->setPassword($password);
        $manager->persist($etudiant3);

        $etudiant4 = new User();
        $etudiant4->setUsername('test1');
        $etudiant4->setEmail('test1@yahoo.com');
        $etudiant4->setPassword('versus');
        $etudiant4->setRoles(array('ROLE_Etudiant'));
        $etudiant4->setEnabled('1');
        $etudiant4->setSalt(md5(uniqid()));
      
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($etudiant4, 'versus');
        $etudiant4->setPassword($password);
        $manager->persist($etudiant4);*/

        $professeur1 = new User();
        $professeur1->setUsername('prof1');
        $professeur1->setEmail('prof1@yahoo.com');
        $professeur1->setPassword('versus');
        $professeur1->setRoles(array('ROLE_professeur'));
        $professeur1->setEnabled('1');
        $professeur1->setSalt(md5(uniqid()));
      
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($professeur1, 'versus');
        $professeur1->setPassword($password);
        $manager->persist( $professeur1);

        $professeur2 = new User();
        $professeur2->setUsername('prof2');
        $professeur2->setEmail('prof2@yahoo.com');
        $professeur2->setPassword('versus');
        $professeur2->setRoles(array('ROLE_professeur'));
        $professeur2->setEnabled('1');
        $professeur2->setSalt(md5(uniqid()));
      
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword( $professeur2, 'versus');
        $professeur2->setPassword($password);
        $manager->persist($professeur2);

      /*  $professeur3 = new User();
        $professeur3->setUsername('prof3');
        $professeur3->setEmail('prof3@yahoo.com');
        $professeur3->setPassword('versus');
        $professeur3->setRoles(array('ROLE_professeur'));
        $professeur3->setEnabled('1');
        $professeur3->setSalt(md5(uniqid()));
       
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword( $professeur3, 'versus');
        $professeur3->setPassword($password);
        $manager->persist($professeur3);

        $professeur4 = new User();
        $professeur4->setUsername('prof4');
        $professeur4->setEmail('prof4@yahoo.com');
        $professeur4->setPassword('versus');
        $professeur4->setRoles(array('ROLE_professeur'));
        $professeur4->setEnabled('1');
        $professeur4->setSalt(md5(uniqid()));
       
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword( $professeur4, 'versus');
        $professeur4->setPassword($password);
        $manager->persist($professeur4);

        $professeur5 = new User();
        $professeur5->setUsername('prof5');
        $professeur5->setEmail('prof5@yahoo.com');
        $professeur5->setPassword('versus');
        $professeur5->setRoles(array('ROLE_professeur'));
        $professeur5->setEnabled('1');
        $professeur5->setSalt(md5(uniqid()));
      
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword( $professeur5, 'versus');
        $professeur5->setPassword($password);
        $manager->persist($professeur5);

        $professeur6 = new User();
        $professeur6->setUsername('prof5');
        $professeur6->setEmail('prof5@yahoo.com');
        $professeur6->setPassword('versus');
        $professeur6->setRoles(array('ROLE_professeur'));
        $professeur6->setEnabled('1');
        $professeur6->setSalt(md5(uniqid()));
      
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword( $professeur6, 'versus');
        $professeur6->setPassword($password);
        $manager->persist($professeur6);

        $professeur7 = new User();
        $professeur7->setUsername('prof5');
        $professeur7->setEmail('prof5@yahoo.com');
        $professeur7->setPassword('versus');
        $professeur7->setRoles(array('ROLE_professeur'));
        $professeur7->setEnabled('1');
        $professeur7->setSalt(md5(uniqid()));
       
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword( $professeur7, 'versus');
        $professeur7->setPassword($password);
        $manager->persist($professeur7);*/


        $manager->flush();


        $this->addReference('etudiant11', $etudiant1);
        $this->addReference('etudiant22', $etudiant2);
       /* $this->addReference('etudiant3', $etudiant3);
        $this->addReference('etudiant4', $etudiant4);*/
        $this->addReference('professeur11', $professeur1);
        $this->addReference('professeur22', $professeur2);
     /*   $this->addReference('professeur3', $professeur3);
        $this->addReference('professeur4', $professeur4);
        $this->addReference('professeur5', $professeur5);
        $this->addReference('professeur6', $professeur6);
        $this->addReference('professeur7', $professeur7);*/



    }

    public function getOrder()
    {
        return 1;
    }

}