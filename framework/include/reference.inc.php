<h1>Reference</h1>

<hr />

<article class="col-24">
	<h2><span class="bookmark" id="snippets"></span>Snippet key commands for Sublime</h2>
	<div class="col-12">
		<p>Use the following key commands in Sublime for easy insertion of SimpleWorks code snippets.</p>
		<h5>Instructions for adding custom user key bindings to Sublime:</h5>
		<p><small>(These instructions assume you are using Sublime text editor for MacOS X)</small></p>
		<ol>
			<li>Click the the <strong>Sublime Text menu</strong> (next to the Apple menu.)</li>
			<li>Go to <strong>Preferences > Key Bindings - User</strong>, this will open a preferences document in Sublime.</li>
			<li>If you do not have any existing user key bindings then select all the code in this file and delete it. If you have existing user key bindings, insert the code from the next step between the "[ ]" in the document, making sure to seperate key binding calls with commas.</li>
			<li>Click the "Get Key Bindings" button to reveal the custom key binding code:
			<p>
				<a class="ui-btn get-code" id="cp1" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">
					<span class="small">
						<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get Key Bindings
					</span>
				</a>
			</p>
			<div class="code-panel" id="cp_cp1">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[
				[
					{"keys": ["ctrl+shift+1"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/grid_col1.sublime-snippet"}},
					{"keys": ["ctrl+shift+2"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/grid_col2.sublime-snippet"}},
					{"keys": ["ctrl+shift+3"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/grid_col3.sublime-snippet"}},
					{"keys": ["ctrl+shift+c"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/grid_cols.sublime-snippet"}},
					{"keys": ["ctrl+shift+l"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/grid_cols_last.sublime-snippet"}},
					{"keys": ["ctrl+shift+o"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_back_to_top.sublime-snippet"}},
					{"keys": ["ctrl+b"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_box.sublime-snippet"}},
					{"keys": ["ctrl+a"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_box_advance.sublime-snippet"}},
					{"keys": ["ctrl+shift+b"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_button.sublime-snippet"}},
					{"keys": ["ctrl+shift+a"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_button_link.sublime-snippet"}},
					{"keys": ["ctrl+shift+h"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_button_grphorz.sublime-snippet"}},
					{"keys": ["ctrl+shift+v"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_button_grpvert.sublime-snippet"}},
					{"keys": ["ctrl+shift+n"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_center_block.sublime-snippet"}},
					{"keys": ["ctrl+n"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_center_inline.sublime-snippet"}},
					{"keys": ["ctrl+shift+z"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_city_state_zip.sublime-snippet"}},
					{"keys": ["ctrl+shift+i"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_fieldhint.sublime-snippet"}},
					{"keys": ["ctrl+f"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_form.sublime-snippet"}},
					{"keys": ["ctrl+shift+f"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_form_row.sublime-snippet"}},
					{"keys": ["ctrl+k"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_keyline_right.sublime-snippet"}},
					{"keys": ["ctrl+shift+k"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_keyline_left.sublime-snippet"}},
					{"keys": ["ctrl+l"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_link_list.sublime-snippet"}},
					{"keys": ["ctrl+e"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_opt_email_in.sublime-snippet"}},
					{"keys": ["ctrl+t"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_table.sublime-snippet"}},
					{"keys": ["ctrl+shift+t"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_tabs.sublime-snippet"}},
					{"keys": ["ctrl+shift+p"], "command": "insert_snippet", "args": {"name": "Packages/User/trunk/ui_tooltip.sublime-snippet"}}
				]
				]]></script>
			</div>
			</li>
			<li>Click the "Copy to Clipboard" icon in the code panel from step #4.</li>
			<li>Paste the user key binding code into the Key Bindings - User document and save.</li>
			<li>Test key commands in a HTML document.</li>
		</ol>
	</div>
	<div class="col-12 last">
		<table border="0" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th scope="col">Snippet</th>
					<th scope="col">Key command</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Grid - 1 column</td>
					<td>Ctrl+Shift+1</td>
				</tr>
				<tr>
					<td>Grid - 2 column</td>
					<td>Ctrl+Shift+2</td>
				</tr>
				<tr>
					<td>Grid - 3 column</td>
					<td>Ctrl+Shift+3</td>
				</tr>
				<tr>
					<td>Grid - Custom columns</td>
					<td>Ctrl+Shift+C</td>
				</tr>
				<tr>
					<td>Grid - Last column</td>
					<td>Ctrl+Shift+L</td>
				</tr>
				<tr>
					<td>UI box</td>
					<td>Ctrl+B</td>
				</tr>
				<tr>
					<td>UI Back to top</td>
					<td>Ctrl+Shift+O</td>
				</tr>
				<tr>
					<td>UI box - advanced</td>
					<td>Ctrl+A</td>
				</tr>
				<tr>
					<td>UI button - button tag</td>
					<td>Ctrl+Shift+B</td>
				</tr>
				<tr>
					<td>UI button - a tag</td>
					<td>Ctrl+Shift+A</td>
				</tr>
				<tr>
					<td>UI button - horizontal group</td>
					<td>Ctrl+Shift+H</td>
				</tr>
				<tr>
					<td>UI button - vertical group</td>
					<td>Ctrl+Shift+V</td>
				</tr>
				<tr>
					<td>UI horizontal center - block</td>
					<td>Ctrl+Shift+N</td>
				</tr>
				<tr>
					<td>UI horizontal center - inline</td>
					<td>Ctrl+N</td>
				</tr>
				<tr>
					<td>UI form - city, state, ZIP</td>
					<td>Ctrl+Shift+Z</td>
				</tr>
				<tr>
					<td>UI form - fieldhint</td>
					<td>Ctrl+Shift+I</td>
				</tr>
				<tr>
					<td>UI form</td>
					<td>Ctrl+F</td>
				</tr>
				<tr>
					<td>UI form - form row</td>
					<td>Ctrl+Shift+F</td>
				</tr>
				<tr>
					<td>UI form - email optin</td>
					<td>Ctrl+E</td>
				</tr>
				<tr>
					<td>UI keyline right</td>
					<td>Ctrl+K</td>
				</tr>
				<tr>
					<td>UI keyline left</td>
					<td>Ctrl+Shift+K</td>
				</tr>
				<tr>
					<td>UI elements - link list</td>
					<td>Ctrl+L</td>
				</tr>
				<tr>
					<td>UI elements - table</td>
					<td>Ctrl+T</td>
				</tr>
				<tr>
					<td>UI elements - tabs</td>
					<td>Ctrl+Shift+T</td>
				</tr>
				<tr>
					<td>UI elements - tooltip</td>
					<td>Ctrl+Shift+P</td>
				</tr>
			</tbody>
		</table>
	</div>

</article>
