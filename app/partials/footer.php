<?php
/**
* Gravity Department - Design Docs
* https://github.com/gravitydepartment/design-docs
*
* @author    Brendan Falkowski
* @copyright Gravity Department. All rights reserved.
*/
?>

            <?php if ($config['debug']): ?>
                <div class="dd-debug">
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
        </main><!-- .dd-matter -->

        <footer class="dd-footer">
            <div class="dd-footer_copyright">
                Copyright &copy; <?php echo date('Y'); ?> <?php echo $config['companyName']; ?>.<br>
                All rights reserved.
            </div>

            <div class="dd-footer_credits">
                Powered by <a href="https://github.com/gravitydepartment/design-docs" target="_blank">Design Docs</a>.<br>
                A tool from <a href="http://gravitydept.com" target="_blank">Gravity Department</a>.
            </div>
        </footer>

        <?php echo implode($config['jsBodyEnd']); ?>
        <script src="<?php echo getAssetUrl('js/build/bundle-app.js'); ?>"></script>
    </div><!-- .dd-site-wrapper -->
</body>
</html>
