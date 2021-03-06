/*******************************************************************************
* KindEditor - WYSIWYG HTML Editor for Internet
* Copyright (C) 2006-2011 kindsoft.net
*
* @author Roddy <luolonghao@gmail.com>
* @site http://www.kindsoft.net/
* @licence http://www.kindsoft.net/license.php
*******************************************************************************/

// google code prettify: http://google-code-prettify.googlecode.com/
// http://google-code-prettify.googlecode.com/


/*
 * 
 * 
C++     cpp, c, c++
C#     c#, c-sharp, csharp
CSS     css
Delphi     delphi, pascal
Java     java
Java Script     js, jscript, javascript
PHP     php
Python     py, python
Ruby     rb, ruby, rails, ror
Sql     sql
VB     vb, vb.net
XML/HTML     xml, html, xhtml, xslt
 */

KindEditor.plugin('code', function(K) {
	var self = this, name = 'code';
	self.clickToolbar(name, function() {
		var lang = self.lang(name + '.'),
			html = ['<div style="padding:10px 20px;">',
				'<div class="ke-dialog-row">',
				'<select class="ke-code-type">',
				'<option value="javascript">JavaScript</option>',
				'<option value="html">HTML</option>',
				'<option value="css">CSS</option>',
				'<option value="PHP">PHP</option>',
				'<option value="Python">Perl</option>',
				'<option value="Python">Python</option>',
				'<option value="Ruby">Ruby</option>',
				'<option value="Java">Java</option>',
				'<option value="vb">ASP/VB</option>',
				'<option value="cpp">C/C++</option>',
				'<option value="c-sharp">C#</option>',
				'<option value="xml">XML</option>',
				'<option value="bsh">Shell</option>',
				'<option value="sql">Sql</option>',
				'<option value="">Other</option>',
				'</select>',
				'</div>',
				'<textarea class="ke-textarea" style="width:408px;height:260px;"></textarea>',
				'</div>'].join(''),
			dialog = self.createDialog({
				name : name,
				width : 450,
				title : self.lang(name),
				body : html,
				yesBtn : {
					name : self.lang('yes'),
					click : function(e) {
						var type = K('.ke-code-type', dialog.div).val(),
							code = textarea.val(),
							cls = type === '' ? '':type,
							html = "<pre name='code' id='prettyprint' " + "class='"+cls+"'>\n" + K.escape(code) + '</pre> ';
						self.insertHtml(html).hideDialog().focus();
					}
				}
			}),
			textarea = K('textarea', dialog.div);
		textarea[0].focus();
	});
});
