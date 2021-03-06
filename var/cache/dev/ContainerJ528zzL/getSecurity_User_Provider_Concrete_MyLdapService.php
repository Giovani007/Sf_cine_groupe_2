<?php

namespace ContainerJ528zzL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_User_Provider_Concrete_MyLdapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.user.provider.concrete.my_ldap' shared service.
     *
     * @return \Symfony\Component\Ldap\Security\LdapUserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ldap'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'LdapUserProvider.php';

        return $container->privates['security.user.provider.concrete.my_ldap'] = new \Symfony\Component\Ldap\Security\LdapUserProvider(($container->privates['Symfony\\Component\\Ldap\\Ldap'] ?? $container->load('getLdapService')), 'uid={username},dc=example,dc=com', 'cn=read-only-admin,dc=example,dc=com', 'password', [0 => 'ROLE_USER'], 'uid', '({uid_key}={username})', NULL, [0 => 'username']);
    }
}
