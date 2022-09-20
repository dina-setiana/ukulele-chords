<form method="post" action="/login" id="loginForm">
    <p class="errorMessage" id="loginErrorMessage"></p>
    <ul>
        <li>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" size="20" value="" />
        </li>
        <li>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" size="20" />
            <p class="hint">yo! this is cAsEsenSiTIvE.</p>
        </li>
        <li class="btnBar">
            <input type="submit" value="Login" name="loginBtn" class="baseBtn blueBtn" />
        </li>
    </ul>
</form>