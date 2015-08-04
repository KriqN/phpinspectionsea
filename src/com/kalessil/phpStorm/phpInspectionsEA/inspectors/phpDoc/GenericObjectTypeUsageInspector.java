package com.kalessil.phpStorm.phpInspectionsEA.inspectors.phpDoc;

import com.intellij.codeInspection.ProblemHighlightType;
import com.intellij.codeInspection.ProblemsHolder;
import com.intellij.openapi.util.text.StringUtil;
import com.intellij.psi.PsiElementVisitor;
import com.jetbrains.php.lang.documentation.phpdoc.psi.PhpDocType;
import com.kalessil.phpStorm.phpInspectionsEA.openApi.BasePhpElementVisitor;
import com.kalessil.phpStorm.phpInspectionsEA.openApi.BasePhpInspection;
import org.jetbrains.annotations.NotNull;

public class GenericObjectTypeUsageInspector extends BasePhpInspection {
    private static final String strProblemUseInterface  = "Please use contract interface definition instead";

    @NotNull
    public String getShortName() {
        return "GenericObjectTypeUsageInspection";
    }

    @Override
    public PsiElementVisitor buildVisitor(@NotNull final ProblemsHolder holder, boolean isOnTheFly) {
        return new BasePhpElementVisitor() {
            public void visitPhpDocType(PhpDocType type) {
                String typeFqn = type.getFQN();
                if (!StringUtil.isEmpty(typeFqn) && typeFqn.equals("\\object")) {
                    holder.registerProblem(type, strProblemUseInterface, ProblemHighlightType.WEAK_WARNING);
                }
            }
        };
    }
}