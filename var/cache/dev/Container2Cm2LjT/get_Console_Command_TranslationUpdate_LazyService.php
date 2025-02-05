<?php

namespace Container2Cm2LjT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_TranslationUpdate_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.translation_update.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.translation_update.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('translation:update', [], 'Update the translation file', false, function () use ($container): \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand {
            return ($container->privates['console.command.translation_update'] ?? $container->load('getConsole_Command_TranslationUpdateService'));
        });
    }
}
