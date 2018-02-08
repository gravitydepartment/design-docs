<?php
/**
* Quasar: Design System
*
* @author     Brendan Falkowski (http://gravitydept.com)
* @copyright  Gravity Department. All rights reserved.
*/
?>

            <?php if ($qq['debug']): ?>
                <div class="qq-debug">
                    <strong>Debug:</strong>
                    (<a href="<?php echo getUrl('debug'); ?>">View Page</a>)
                    <br>

                    <?php
                    echo (isset($_GET['module'])) ? 'Module: ' . $_GET['module'] . '<br>' : '';
                    echo (isset($_GET['param2'])) ? 'Param2: ' . $_GET['param2'] . '<br>' : '';
                    echo (isset($_GET['param3'])) ? 'Param3: ' . $_GET['param3'] . '<br>' : '';
                    ?>
                </div>
            <?php endif; ?>
        </main><!-- .qq-matter -->

        <footer class="qq-footer">
            <div class="qq-footer_copyright">
                Copyright &copy; <?php echo date('Y'); ?> <?php echo $qq['companyName']; ?>.<br>
                All rights reserved.
            </div>

            <div class="qq-footer_credits">
                Powered by <a href="https://github.com/gravitydepartment/design-docs" target="_blank">Design Docs</a>.<br>
                A tool from <a href="http://gravitydept.com" target="_blank">Gravity Department</a>.
            </div>
        </footer>

        <?php echo implode($qq['jsBodyEnd']); ?>
        <script src="<?php echo getAssetUrl('js/build/app.min.js'); ?>"></script>
    </div><!-- .qq-site-wrapper -->
</body>
</html>
