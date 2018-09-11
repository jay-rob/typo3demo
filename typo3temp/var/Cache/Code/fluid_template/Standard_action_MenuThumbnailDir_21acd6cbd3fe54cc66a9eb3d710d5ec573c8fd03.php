<?php

class Standard_action_MenuThumbnailDir_21acd6cbd3fe54cc66a9eb3d710d5ec573c8fd03 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
));
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['section'] = NULL;
$arguments7['partial'] = NULL;
$arguments7['delegate'] = NULL;
$arguments7['renderable'] = NULL;
$arguments7['arguments'] = array (
);
$arguments7['optional'] = false;
$arguments7['default'] = NULL;
$arguments7['contentAs'] = NULL;
$arguments7['partial'] = 'Menu/SkipNavigation';
$arguments7['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
        <div class="thumbnail-menu">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '

                        <a href="';
$array26 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.link', $array26)]);

$output25 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$arguments27['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('page.target', $array30);

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments27['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$output32 = '';

$output32 .= ' target="';
$array33 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.target', $array33)]);

$output32 .= '"';
$arguments27['then'] = $output32;

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output25 .= ' style="max-width: ';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string34 = '{settings.menuthumbnail.media.width as integer}';
$array35 = array (
  0 => '{settings.menuthumbnail.media.width as integer}',
  1 => '{settings.menuthumbnail.media.width as integer}',
);

$output25 .= \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string34, $array35);

$output25 .= 'px" title="';
$array36 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array36)]);

$output25 .= '" class="thumbnail-menu-item" data-toggle="tooltip">
                            <div class="thumbnail-menu-image">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['alt'] = NULL;
$arguments37['file'] = NULL;
$arguments37['additionalConfig'] = array (
);
$arguments37['width'] = NULL;
$arguments37['height'] = NULL;
$arguments37['cropVariant'] = 'default';
$array39 = array (
);$arguments37['file'] = $renderingContext->getVariableProvider()->getByPath('page.files.0', $array39);
$array40 = array (
);$arguments37['width'] = $renderingContext->getVariableProvider()->getByPath('settings.menuthumbnail.media.width', $array40);
$array41 = array (
);$arguments37['height'] = $renderingContext->getVariableProvider()->getByPath('settings.menuthumbnail.media.height', $array41);

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output25 .= '
                            </div>
                            <div class="thumbnail-menu-caption">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
                                    <h3 class="thumbnail-menu-caption-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$array51 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.data.title', $array51)]);
};
$arguments48 = array();
$arguments48['maxCharacters'] = NULL;
$arguments48['append'] = '...';
$arguments48['respectWordBoundaries'] = true;
$arguments48['respectHtml'] = true;
$array50 = array (
);$arguments48['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.menuthumbnail.title.crop', $array50);

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '</h3>
                                ';
return $output47;
};
$arguments42 = array();
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$arguments42['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['0'] = $renderingContext->getVariableProvider()->getByPath('page.data.title', $array45);

$expression46 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments42['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression46(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$arguments42['__thenClosure'] = $renderChildrenClosure43;

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output25 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                                    <p class="thumbnail-menu-caption-abstract">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$array63 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.data.abstract', $array63)]);
};
$arguments60 = array();
$arguments60['maxCharacters'] = NULL;
$arguments60['append'] = '...';
$arguments60['respectWordBoundaries'] = true;
$arguments60['respectHtml'] = true;
$array62 = array (
);$arguments60['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.menuthumbnail.abstract.crop', $array62);

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '</p>
                                ';
return $output59;
};
$arguments52 = array();
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$arguments52['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('page.data.abstract', $array55);
$array54['1'] = ' && ';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string56 = '{settings.menuthumbnail.media.width as integer}';
$array57 = array (
  0 => '{settings.menuthumbnail.media.width as integer}',
  1 => '{settings.menuthumbnail.media.width as integer}',
);
$array54['2'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string56, $array57);
$array54['3'] = ' > 300';

$expression58 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) > 300));};
$arguments52['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments52['__thenClosure'] = $renderChildrenClosure53;

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output25 .= '
                            </div>
                        </a>

                    ';
return $output25;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['0'] = $renderingContext->getVariableProvider()->getByPath('page.files.0.type', $array23);
$array22['1'] = ' == 2';

$expression24 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = $renderChildrenClosure21;

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
                ';
return $output19;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('page.files.0', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['__thenClosure'] = $renderChildrenClosure15;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
            ';
return $output13;
};
$arguments10 = array();
$arguments10['each'] = NULL;
$arguments10['as'] = NULL;
$arguments10['key'] = NULL;
$arguments10['reverse'] = false;
$arguments10['iteration'] = NULL;
$array12 = array (
);$arguments10['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array12);
$arguments10['as'] = 'page';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output6 .= '
        </div>
    ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output64 = '';

$output64 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['name'] = NULL;
$arguments65['name'] = 'Default';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output64 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['section'] = NULL;
$arguments76['partial'] = NULL;
$arguments76['delegate'] = NULL;
$arguments76['renderable'] = NULL;
$arguments76['arguments'] = array (
);
$arguments76['optional'] = false;
$arguments76['default'] = NULL;
$arguments76['contentAs'] = NULL;
$arguments76['partial'] = 'Menu/SkipNavigation';
$arguments76['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
        <div class="thumbnail-menu">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '

                        <a href="';
$array95 = array (
);
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.link', $array95)]);

$output94 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['then'] = NULL;
$arguments96['else'] = NULL;
$arguments96['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['0'] = $renderingContext->getVariableProvider()->getByPath('page.target', $array99);

$expression100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments96['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$output101 = '';

$output101 .= ' target="';
$array102 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.target', $array102)]);

$output101 .= '"';
$arguments96['then'] = $output101;

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output94 .= ' style="max-width: ';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string103 = '{settings.menuthumbnail.media.width as integer}';
$array104 = array (
  0 => '{settings.menuthumbnail.media.width as integer}',
  1 => '{settings.menuthumbnail.media.width as integer}',
);

$output94 .= \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string103, $array104);

$output94 .= 'px" title="';
$array105 = array (
);
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array105)]);

$output94 .= '" class="thumbnail-menu-item" data-toggle="tooltip">
                            <div class="thumbnail-menu-image">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['additionalAttributes'] = NULL;
$arguments106['data'] = NULL;
$arguments106['class'] = NULL;
$arguments106['dir'] = NULL;
$arguments106['id'] = NULL;
$arguments106['lang'] = NULL;
$arguments106['style'] = NULL;
$arguments106['title'] = NULL;
$arguments106['accesskey'] = NULL;
$arguments106['tabindex'] = NULL;
$arguments106['onclick'] = NULL;
$arguments106['alt'] = NULL;
$arguments106['file'] = NULL;
$arguments106['additionalConfig'] = array (
);
$arguments106['width'] = NULL;
$arguments106['height'] = NULL;
$arguments106['cropVariant'] = 'default';
$array108 = array (
);$arguments106['file'] = $renderingContext->getVariableProvider()->getByPath('page.files.0', $array108);
$array109 = array (
);$arguments106['width'] = $renderingContext->getVariableProvider()->getByPath('settings.menuthumbnail.media.width', $array109);
$array110 = array (
);$arguments106['height'] = $renderingContext->getVariableProvider()->getByPath('settings.menuthumbnail.media.height', $array110);

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output94 .= '
                            </div>
                            <div class="thumbnail-menu-caption">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
                                    <h3 class="thumbnail-menu-caption-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$array120 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.data.title', $array120)]);
};
$arguments117 = array();
$arguments117['maxCharacters'] = NULL;
$arguments117['append'] = '...';
$arguments117['respectWordBoundaries'] = true;
$arguments117['respectHtml'] = true;
$array119 = array (
);$arguments117['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.menuthumbnail.title.crop', $array119);

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '</h3>
                                ';
return $output116;
};
$arguments111 = array();
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$arguments111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['0'] = $renderingContext->getVariableProvider()->getByPath('page.data.title', $array114);

$expression115 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);
$arguments111['__thenClosure'] = $renderChildrenClosure112;

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output94 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
                                    <p class="thumbnail-menu-caption-abstract">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$array132 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.data.abstract', $array132)]);
};
$arguments129 = array();
$arguments129['maxCharacters'] = NULL;
$arguments129['append'] = '...';
$arguments129['respectWordBoundaries'] = true;
$arguments129['respectHtml'] = true;
$array131 = array (
);$arguments129['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.menuthumbnail.abstract.crop', $array131);

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '</p>
                                ';
return $output128;
};
$arguments121 = array();
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$arguments121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['0'] = $renderingContext->getVariableProvider()->getByPath('page.data.abstract', $array124);
$array123['1'] = ' && ';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string125 = '{settings.menuthumbnail.media.width as integer}';
$array126 = array (
  0 => '{settings.menuthumbnail.media.width as integer}',
  1 => '{settings.menuthumbnail.media.width as integer}',
);
$array123['2'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string125, $array126);
$array123['3'] = ' > 300';

$expression127 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) > 300));};
$arguments121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression127(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$arguments121['__thenClosure'] = $renderChildrenClosure122;

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output94 .= '
                            </div>
                        </a>

                    ';
return $output94;
};
$arguments89 = array();
$arguments89['then'] = NULL;
$arguments89['else'] = NULL;
$arguments89['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array91 = array();
$array92 = array (
);$array91['0'] = $renderingContext->getVariableProvider()->getByPath('page.files.0.type', $array92);
$array91['1'] = ' == 2';

$expression93 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments89['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression93(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array91)
					),
					$renderingContext
				);
$arguments89['__thenClosure'] = $renderChildrenClosure90;

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
                ';
return $output88;
};
$arguments83 = array();
$arguments83['then'] = NULL;
$arguments83['else'] = NULL;
$arguments83['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['0'] = $renderingContext->getVariableProvider()->getByPath('page.files.0', $array86);

$expression87 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments83['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression87(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array85)
					),
					$renderingContext
				);
$arguments83['__thenClosure'] = $renderChildrenClosure84;

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
            ';
return $output82;
};
$arguments79 = array();
$arguments79['each'] = NULL;
$arguments79['as'] = NULL;
$arguments79['key'] = NULL;
$arguments79['reverse'] = false;
$arguments79['iteration'] = NULL;
$array81 = array (
);$arguments79['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array81);
$arguments79['as'] = 'page';

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output75 .= '
        </div>
    ';
return $output75;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array73);

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments70['__thenClosure'] = $renderChildrenClosure71;

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '

';
return $output69;
};
$arguments67 = array();
$arguments67['name'] = NULL;
$arguments67['name'] = 'Main';

$output64 .= NULL;

$output64 .= '

';

return $output64;
}


}
#