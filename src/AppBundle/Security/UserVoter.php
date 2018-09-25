<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 25/09/2018
 * Time: 21:36
 */

namespace AppBundle\Security;


use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class UserVoter extends Voter
{


    protected function supports($attribute, $subject)
    {
        if($attribute != 'USER_VIEW'){
            return false;
        }

        if(!$subject instanceof User){
            return false;
        }
        return true;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        return $subject === $token->getUser();
    }
}