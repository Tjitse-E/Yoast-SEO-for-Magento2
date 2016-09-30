<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the General Public License (GPL 3.0).
 * This license is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/gpl-3.0.en.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future.
 *
 * @category    Maxserv: MaxServ_YoastSeo
 * @package     Maxserv: MaxServ_YoastSeo
 * @author      Vincent Hornikx <vincent.hornikx@maxser.com>
 * @copyright   Copyright (c) 2016 MaxServ (http://www.maxserv.com)
 * @license     http://opensource.org/licenses/gpl-3.0.en.php General Public License (GPL 3.0)
 *
 */

namespace MaxServ\YoastSeo\Model\EntityConfiguration\Mirasvit\Blog;

use MaxServ\YoastSeo\Model\EntityConfiguration\AbstractTemplateProcessor;
use MaxServ\YoastSeo\Model\EntityConfiguration\TemplateProcessorInterface;

class TemplateProcessor extends AbstractTemplateProcessor implements TemplateProcessorInterface
{

    /**
     * @inheritdoc
     */
    public function processTemplate($template)
    {
        $fields = $this->getFields($template);

        foreach ($fields as $field) {
            if ($field !== 'images') {
                $this->replaceField($template, $field, sprintf('[name="post[%s]"]', $field));
            }
        }

        return $template;
    }
}