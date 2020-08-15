<?php
namespace Magento\MediaStorage\App\Media;

/**
 * Interceptor class for @see \Magento\MediaStorage\App\Media
 */
class Interceptor extends \Magento\MediaStorage\App\Media implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\MediaStorage\Model\File\Storage\ConfigFactory $configFactory, \Magento\MediaStorage\Model\File\Storage\SynchronizationFactory $syncFactory, \Magento\MediaStorage\Model\File\Storage\Response $response, \Closure $isAllowed, $mediaDirectory, $configCacheFile, $relativeFileName, \Magento\Framework\Filesystem $filesystem, \Magento\Catalog\Model\View\Asset\PlaceholderFactory $placeholderFactory, \Magento\Framework\App\State $state, \Magento\MediaStorage\Service\ImageResize $imageResize)
    {
        $this->___init();
        parent::__construct($configFactory, $syncFactory, $response, $isAllowed, $mediaDirectory, $configCacheFile, $relativeFileName, $filesystem, $placeholderFactory, $state, $imageResize);
    }

    /**
     * {@inheritdoc}
     */
    public function launch()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'launch');
        if (!$pluginInfo) {
            return parent::launch();
        } else {
            return $this->___callPlugins('launch', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function catchException(\Magento\Framework\App\Bootstrap $bootstrap, \Exception $exception)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'catchException');
        if (!$pluginInfo) {
            return parent::catchException($bootstrap, $exception);
        } else {
            return $this->___callPlugins('catchException', func_get_args(), $pluginInfo);
        }
    }
}
