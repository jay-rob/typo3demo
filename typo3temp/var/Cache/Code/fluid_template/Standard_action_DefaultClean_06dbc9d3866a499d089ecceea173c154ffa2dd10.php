<?php

class Standard_action_DefaultClean_06dbc9d3866a499d089ecceea173c154ffa2dd10 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output5 = '';

$output5 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['name'] = NULL;
$arguments6['name'] = 'Default';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output5 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '

    <div class="section section-default">
        <div class="container">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['typoscriptObjectPath'] = NULL;
$arguments11['data'] = NULL;
$arguments11['currentValueKey'] = NULL;
$arguments11['table'] = '';
$arguments11['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array14);
$array13['colPos'] = 0;
$arguments11['data'] = $array13;

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
        </div>
    </div>

';
return $output10;
};
$arguments8 = array();
$arguments8['name'] = NULL;
$arguments8['name'] = 'Main';

$output5 .= NULL;

$output5 .= '

';

return $output5;
}


}
#