<?php

class partial_Navigation_Subnavigation_7481fe015d9c89d140f187ecd353a64d79ea43cb extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
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
 * section SubnavigationItem
 */
public function section_1f48c9e3f0a5a0b24cdae8cd6ea6066950e450ee(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
                <li class="nav-header">';
$array42 = array (
);
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array42)]);

$output41 .= '</li>
            ';
return $output41;
};
$arguments39 = array();

$output38 .= '';

$output38 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
                <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['then'] = NULL;
$arguments46['else'] = NULL;
$arguments46['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array49);

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments46['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)
					),
					$renderingContext
				);
$arguments46['then'] = 'active';

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '">
                    <a href="';
$array51 = array (
);
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array51)]);

$output45 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$arguments52['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array55);

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments52['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$output57 = '';

$output57 .= ' target="';
$array58 = array (
);
$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array58)]);

$output57 .= '"';
$arguments52['then'] = $output57;

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output45 .= ' title="';
$array59 = array (
);
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array59)]);

$output45 .= '">
                        <span>';
$array60 = array (
);
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array60)]);

$output45 .= '</span>
                    </a>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
                        <ul>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['section'] = NULL;
$arguments67['partial'] = NULL;
$arguments67['delegate'] = NULL;
$arguments67['renderable'] = NULL;
$arguments67['arguments'] = array (
);
$arguments67['optional'] = false;
$arguments67['default'] = NULL;
$arguments67['contentAs'] = NULL;
$arguments67['section'] = 'SubnavigationItem';
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['menu'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array70);
$arguments67['arguments'] = $array69;

$output66 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
                        </ul>
                    ';
return $output66;
};
$arguments61 = array();
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array64);

$expression65 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression65(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments61['__thenClosure'] = $renderChildrenClosure62;

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output45 .= '
                </li>
            ';
return $output45;
};
$arguments43 = array();
$arguments43['if'] = NULL;

$output38 .= '';

$output38 .= '
        ';
return $output38;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
                <li class="nav-header">';
$array8 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array8)]);

$output7 .= '</li>
            ';
return $output7;
};
$arguments5['__elseClosures'][] = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
                <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array13);

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['then'] = 'active';

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '">
                    <a href="';
$array15 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array15)]);

$output9 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array19);

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$output21 = '';

$output21 .= ' target="';
$array22 = array (
);
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array22)]);

$output21 .= '"';
$arguments16['then'] = $output21;

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output9 .= ' title="';
$array23 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array23)]);

$output9 .= '">
                        <span>';
$array24 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array24)]);

$output9 .= '</span>
                    </a>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                        <ul>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['section'] = NULL;
$arguments31['partial'] = NULL;
$arguments31['delegate'] = NULL;
$arguments31['renderable'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['optional'] = false;
$arguments31['default'] = NULL;
$arguments31['contentAs'] = NULL;
$arguments31['section'] = 'SubnavigationItem';
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['menu'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array34);
$arguments31['arguments'] = $array33;

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
                        </ul>
                    ';
return $output30;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = $renderChildrenClosure26;

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output9 .= '
                </li>
            ';
return $output9;
};

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
    ';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array3);
$arguments1['as'] = 'item';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output71 = '';

$output71 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
    <nav class="hidden-print hidden-xs hidden-sm" role="navigation">
        <ul class="nav nav-sidebar">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['section'] = NULL;
$arguments78['partial'] = NULL;
$arguments78['delegate'] = NULL;
$arguments78['renderable'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['optional'] = false;
$arguments78['default'] = NULL;
$arguments78['contentAs'] = NULL;
$arguments78['section'] = 'SubnavigationItem';
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['menu'] = $renderingContext->getVariableProvider()->getByPath('subnavigation', $array81);
$arguments78['arguments'] = $array80;

$output77 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
        </ul>
    </nav>
';
return $output77;
};
$arguments72 = array();
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$arguments72['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['0'] = $renderingContext->getVariableProvider()->getByPath('subnavigation', $array75);

$expression76 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments72['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression76(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)
					),
					$renderingContext
				);
$arguments72['__thenClosure'] = $renderChildrenClosure73;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
                <li class="nav-header">';
$array126 = array (
);
$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array126)]);

$output125 .= '</li>
            ';
return $output125;
};
$arguments123 = array();

$output122 .= '';

$output122 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
                <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array133);

$expression134 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array132)
					),
					$renderingContext
				);
$arguments130['then'] = 'active';

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '">
                    <a href="';
$array135 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array135)]);

$output129 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['then'] = NULL;
$arguments136['else'] = NULL;
$arguments136['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array139);

$expression140 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments136['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression140(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array138)
					),
					$renderingContext
				);
$output141 = '';

$output141 .= ' target="';
$array142 = array (
);
$output141 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array142)]);

$output141 .= '"';
$arguments136['then'] = $output141;

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output129 .= ' title="';
$array143 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array143)]);

$output129 .= '">
                        <span>';
$array144 = array (
);
$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array144)]);

$output129 .= '</span>
                    </a>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
                        <ul>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['section'] = NULL;
$arguments151['partial'] = NULL;
$arguments151['delegate'] = NULL;
$arguments151['renderable'] = NULL;
$arguments151['arguments'] = array (
);
$arguments151['optional'] = false;
$arguments151['default'] = NULL;
$arguments151['contentAs'] = NULL;
$arguments151['section'] = 'SubnavigationItem';
// Rendering Array
$array153 = array();
$array154 = array (
);$array153['menu'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array154);
$arguments151['arguments'] = $array153;

$output150 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output150 .= '
                        </ul>
                    ';
return $output150;
};
$arguments145 = array();
$arguments145['then'] = NULL;
$arguments145['else'] = NULL;
$arguments145['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array147 = array();
$array148 = array (
);$array147['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array148);

$expression149 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments145['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression149(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array147)
					),
					$renderingContext
				);
$arguments145['__thenClosure'] = $renderChildrenClosure146;

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output129 .= '
                </li>
            ';
return $output129;
};
$arguments127 = array();
$arguments127['if'] = NULL;

$output122 .= '';

$output122 .= '
        ';
return $output122;
};
$arguments89 = array();
$arguments89['then'] = NULL;
$arguments89['else'] = NULL;
$arguments89['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array120);

$expression121 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments89['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$arguments89['__thenClosure'] = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
                <li class="nav-header">';
$array92 = array (
);
$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array92)]);

$output91 .= '</li>
            ';
return $output91;
};
$arguments89['__elseClosures'][] = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
                <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['then'] = NULL;
$arguments94['else'] = NULL;
$arguments94['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array96 = array();
$array97 = array (
);$array96['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array97);

$expression98 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments94['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array96)
					),
					$renderingContext
				);
$arguments94['then'] = 'active';

$output93 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output93 .= '">
                    <a href="';
$array99 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array99)]);

$output93 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$arguments100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array103);

$expression104 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$output105 = '';

$output105 .= ' target="';
$array106 = array (
);
$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array106)]);

$output105 .= '"';
$arguments100['then'] = $output105;

$output93 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output93 .= ' title="';
$array107 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array107)]);

$output93 .= '">
                        <span>';
$array108 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array108)]);

$output93 .= '</span>
                    </a>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
                        <ul>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['section'] = NULL;
$arguments115['partial'] = NULL;
$arguments115['delegate'] = NULL;
$arguments115['renderable'] = NULL;
$arguments115['arguments'] = array (
);
$arguments115['optional'] = false;
$arguments115['default'] = NULL;
$arguments115['contentAs'] = NULL;
$arguments115['section'] = 'SubnavigationItem';
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['menu'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array118);
$arguments115['arguments'] = $array117;

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
                        </ul>
                    ';
return $output114;
};
$arguments109 = array();
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$arguments109['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array111 = array();
$array112 = array (
);$array111['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array112);

$expression113 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments109['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression113(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);
$arguments109['__thenClosure'] = $renderChildrenClosure110;

$output93 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output93 .= '
                </li>
            ';
return $output93;
};

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
    ';
return $output88;
};
$arguments85 = array();
$arguments85['each'] = NULL;
$arguments85['as'] = NULL;
$arguments85['key'] = NULL;
$arguments85['reverse'] = false;
$arguments85['iteration'] = NULL;
$array87 = array (
);$arguments85['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array87);
$arguments85['as'] = 'item';

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
';
return $output84;
};
$arguments82 = array();
$arguments82['name'] = NULL;
$arguments82['name'] = 'SubnavigationItem';

$output71 .= NULL;

$output71 .= '

';

return $output71;
}


}
#