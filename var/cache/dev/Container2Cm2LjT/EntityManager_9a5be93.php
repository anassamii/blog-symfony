<?php

namespace Container2Cm2LjT;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5a6ea = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer00a2f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties33707 = [
        
    ];

    public function getConnection()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'getConnection', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'getMetadataFactory', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'getExpressionBuilder', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'beginTransaction', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'getCache', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->getCache();
    }

    public function transactional($func)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'transactional', array('func' => $func), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'wrapInTransaction', array('func' => $func), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'commit', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->commit();
    }

    public function rollback()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'rollback', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'getClassMetadata', array('className' => $className), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'createQuery', array('dql' => $dql), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'createNamedQuery', array('name' => $name), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'createQueryBuilder', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'flush', array('entity' => $entity), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'clear', array('entityName' => $entityName), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->clear($entityName);
    }

    public function close()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'close', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->close();
    }

    public function persist($entity)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'persist', array('entity' => $entity), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'remove', array('entity' => $entity), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'refresh', array('entity' => $entity), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'detach', array('entity' => $entity), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'merge', array('entity' => $entity), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'getRepository', array('entityName' => $entityName), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'contains', array('entity' => $entity), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'getEventManager', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'getConfiguration', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'isOpen', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'getUnitOfWork', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'getProxyFactory', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'initializeObject', array('obj' => $obj), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'getFilters', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'isFiltersStateClean', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'hasFilters', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return $this->valueHolder5a6ea->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer00a2f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5a6ea) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5a6ea = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5a6ea->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, '__get', ['name' => $name], $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        if (isset(self::$publicProperties33707[$name])) {
            return $this->valueHolder5a6ea->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a6ea;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5a6ea;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a6ea;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5a6ea;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, '__isset', array('name' => $name), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a6ea;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5a6ea;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, '__unset', array('name' => $name), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a6ea;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5a6ea;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, '__clone', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        $this->valueHolder5a6ea = clone $this->valueHolder5a6ea;
    }

    public function __sleep()
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, '__sleep', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        return array('valueHolder5a6ea');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer00a2f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer00a2f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'initializeProxy', array(), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a6ea;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a6ea;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
