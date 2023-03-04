<?php

namespace Container2Cm2LjT;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{

    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        if ($this->valueHolder5a6ea === $returnValue = $this->valueHolder5a6ea->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer00a2f = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder5a6ea) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder5a6ea = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer00a2f && ($this->initializer00a2f->__invoke($valueHolder5a6ea, $this, '__get', ['name' => $name], $this->initializer00a2f) || 1) && $this->valueHolder5a6ea = $valueHolder5a6ea;

        if (isset(self::$publicProperties33707[$name])) {
            return $this->valueHolder5a6ea->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
