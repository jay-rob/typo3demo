<?php

class Standard_action_DefaultSubNavRight_8f55269bea9bc1b942c04083c866d8d7d073251a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

    <div class="section section-default">
        <div class="container">
            <div class="row">
                <main class="col-md-9 maincontent-wrap" role="main">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['data'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array4);
$array3['colPos'] = 0;
$arguments1['data'] = $array3;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
                </main>
                <div class="col-md-3 subnav-wrap">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['section'] = NULL;
$arguments5['partial'] = NULL;
$arguments5['delegate'] = NULL;
$arguments5['renderable'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['optional'] = false;
$arguments5['default'] = NULL;
$arguments5['contentAs'] = NULL;
$arguments5['partial'] = 'Navigation/Subnavigation';
$arguments5['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
                </div>
            </div>
        </div>
    </div>

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output8 = '';

$output8 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['name'] = NULL;
$arguments9['name'] = 'Default';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output8 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '

    <div class="section section-default">
        <div class="container">
            <div class="row">
                <main class="col-md-9 maincontent-wrap" role="main">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['typoscriptObjectPath'] = NULL;
$arguments14['data'] = NULL;
$arguments14['currentValueKey'] = NULL;
$arguments14['table'] = '';
$arguments14['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array17);
$array16['colPos'] = 0;
$arguments14['data'] = $array16;

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
                </main>
                <div class="col-md-3 subnav-wrap">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['section'] = NULL;
$arguments18['partial'] = NULL;
$arguments18['delegate'] = NULL;
$arguments18['renderable'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['optional'] = false;
$arguments18['default'] = NULL;
$arguments18['contentAs'] = NULL;
$arguments18['partial'] = 'Navigation/Subnavigation';
$arguments18['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output13 .= '
                </div>
            </div>
        </div>
    </div>

';
return $output13;
};
$arguments11 = array();
$arguments11['name'] = NULL;
$arguments11['name'] = 'Main';

$output8 .= NULL;

$output8 .= '

';

return $output8;
}


}
#