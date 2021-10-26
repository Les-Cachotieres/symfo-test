<?php

namespace Container75cvfFG;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder20450 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf062c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5ab0f = [
        
    ];

    public function getConnection()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'getConnection', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'getMetadataFactory', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'getExpressionBuilder', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'beginTransaction', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'getCache', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'transactional', array('func' => $func), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->transactional($func);
    }

    public function commit()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'commit', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->commit();
    }

    public function rollback()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'rollback', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'getClassMetadata', array('className' => $className), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'createQuery', array('dql' => $dql), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'createNamedQuery', array('name' => $name), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'createQueryBuilder', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'flush', array('entity' => $entity), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'clear', array('entityName' => $entityName), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->clear($entityName);
    }

    public function close()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'close', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->close();
    }

    public function persist($entity)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'persist', array('entity' => $entity), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'remove', array('entity' => $entity), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'refresh', array('entity' => $entity), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'detach', array('entity' => $entity), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'merge', array('entity' => $entity), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'contains', array('entity' => $entity), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'getEventManager', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'getConfiguration', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'isOpen', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'getUnitOfWork', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'getProxyFactory', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'initializeObject', array('obj' => $obj), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'getFilters', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'isFiltersStateClean', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'hasFilters', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return $this->valueHolder20450->hasFilters();
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

        $instance->initializerf062c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder20450) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder20450 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder20450->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, '__get', ['name' => $name], $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        if (isset(self::$publicProperties5ab0f[$name])) {
            return $this->valueHolder20450->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20450;

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

        $targetObject = $this->valueHolder20450;
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
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20450;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder20450;
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
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, '__isset', array('name' => $name), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20450;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder20450;
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
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, '__unset', array('name' => $name), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20450;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder20450;
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
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, '__clone', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        $this->valueHolder20450 = clone $this->valueHolder20450;
    }

    public function __sleep()
    {
        $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, '__sleep', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;

        return array('valueHolder20450');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf062c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf062c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf062c && ($this->initializerf062c->__invoke($valueHolder20450, $this, 'initializeProxy', array(), $this->initializerf062c) || 1) && $this->valueHolder20450 = $valueHolder20450;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder20450;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder20450;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
