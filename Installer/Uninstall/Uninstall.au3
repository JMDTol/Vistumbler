#RequireAdmin
#Region ;**** Directives created by AutoIt3Wrapper_GUI ****
#AutoIt3Wrapper_icon=..\icon.ico
#EndRegion ;**** Directives created by AutoIt3Wrapper_GUI ****
$TempUninstallEXE = @TempDir & '\vi_uninstall.exe'
FileInstall ( "vi_uninstall.exe", $TempUninstallEXE, 1)
Run($TempUninstallEXE)
Exit

