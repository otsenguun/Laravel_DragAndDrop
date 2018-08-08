CKEDITOR.plugins.add( 'timestamp', {
    icons: 'timestamp',
    init: function( editor ) {
        editor.addCommand( 'insertTimestamp', {
            exec: function( editor ) {
                toast(editor);
            }
        });
        editor.ui.addButton( 'Timestamp', {
            label: 'Insert Timestamp',
            command: 'insertTimestamp',
            toolbar: 'insert'
        });
    }
});