<?php
namespace Dotsquares\Ordercomment\Plugin\Block\Adminhtml\Order\View\Tab;

class Info
{
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @param \Magento\Framework\View\Element\BlockFactory $objectManager
     */
    public function __construct(\Magento\Framework\View\Element\BlockFactory $blockFactory)
    {
        $this->_blockFactory = $blockFactory;
    }

    public function afterGetGiftOptionsHtml(\Magento\Sales\Block\Adminhtml\Order\View\Tab\Info $subject, $html)
    {
        $order = $subject->getOrder();

        $block = $this->_blockFactory
            ->createBlock('Magento\Framework\View\Element\Template')
            ->setTemplate('Dotsquares_Ordercomment::order/customer_comment.phtml')
	        ->setCustomerComment($order->getCustomerComment())
        ;

        return $block->toHtml();
    }
}