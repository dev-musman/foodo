<script src="{{asset('public/admin/js/ckeditor.js')}}"></script>

<script>


    ClassicEditor
	.create( document.querySelector( '.editor' ), {
        toolbar: {
        items: ["undo","redo","|","importWord","exportWord","exportPdf","|","formatPainter","caseChange","findAndReplace","selectAll","wproofreader","|","insertTemplate","tableOfContents","|","link","insertImage","ckbox","insertTable","blockQuote","mediaEmbed","codeBlock","pageBreak","horizontalLine","specialCharacters","-","heading","style","|","bold","italic","underline","strikethrough",{label:"Basic styles",icon:"text",items:["fontSize","fontFamily","fontColor","fontBackgroundColor","highlight","superscript","subscript","code","|","textPartLanguage","|"]},"removeFormat","|","alignment","|","bulletedList","numberedList","multilevelList","todoList","|","outdent","indent"],

        shouldNotGroupWhenFull: false
    },
    heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' }
                    ]
                },
        htmlSupport: {
    allow: [
        {
            name: /.*/,
            attributes: true,
            classes: true,
            id: true,
            styles: true
        }
    ]
},
        simpleUpload: {
            uploadUrl: '{{route('admin.ckeditor.upload')}}',
            // Enable the XMLHttpRequest.withCredentials property.
            withCredentials: true,
            // Headers sent along with the XMLHttpRequest to the upload server.
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                Authorization: 'Bearer '
            }
        }

	} )
	.then( editor => {
          editor.model.document.on('change:data', () => {
            // console.log(editor);
            const editorData = editor.getData({ preserveWhitespace: true });
            $('.append_data').html(editorData);
            console.log(editorData); // Output the editor content to the console
            // You can perform any action with the editor content here
        });
	} )
	.catch( handleSampleError );


    ClassicEditor
	.create( document.querySelector( '.editor-2' ), {
        toolbar: {
        items: [
            'undo', 'redo','alignment',
            '|', 'heading','fontsize',
            '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
            '|', 'link','uploadImage',
        ],

        shouldNotGroupWhenFull: false
    },
    heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' }
                    ]
                },
        htmlSupport: {
    allow: [
        {
            name: /.*/,
            attributes: true,
            classes: true,
            id: true,
            styles: true
        }
    ]
},
        simpleUpload: {
            uploadUrl: '{{route('admin.ckeditor.upload')}}',
            // Enable the XMLHttpRequest.withCredentials property.
            withCredentials: true,
            // Headers sent along with the XMLHttpRequest to the upload server.
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                Authorization: 'Bearer '
            }
        }

	} )
	.then( editor => {
          editor.model.document.on('change:data', () => {
            const editorData = editor.getData({ preserveWhitespace: true });
            $('.append_data').html(editorData);
            console.log(editorData); // Output the editor content to the console
            // You can perform any action with the editor content here
        });
	} )
	.catch( handleSampleError );

function handleSampleError( error ) {
	const issueUrl = 'https://github.com/ckeditor/ckeditor5/issues';

	const message = [
		'Oops, something went wrong.',
		`Please, report the following error on ${ issueUrl } with the build id "parvgrg3s0h8-nohdljl880ze" and the error stack trace:`
	].join( '\n' );

	console.error( message );
	console.error( error );
}


</script>
