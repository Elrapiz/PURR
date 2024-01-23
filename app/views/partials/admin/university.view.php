<table>
    <thead>
        <form id="controls" class="controls">
            <label for="row-count">Select rows</label>
            <select name="row-count" id="row-count">
                <option value="15">15</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>

            <input type="search" name="search-university" placeholder="Search university" value="<?php if(isset($searched_univ)) echo $searched_univ ?>">    
            <button>Search</button>
        </form>

        <tr>
            <th>Abbreviation</th>
            <th>Universtiy name</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>Abbr</td>
            <td>Test Univ name</td>
            <td>Test univ location</td>
            <td>Edit delete</td>
        </tr>
    </tbody>
</table>
<p>pagination</p>