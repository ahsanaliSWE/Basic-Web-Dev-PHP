    <h2>Compose Email</h2>
    <table>
        <tr>
            <td class="sidebar">
                <div class="menu">
                    <button onclick="compose()">Compose</button>
                    <button onclick="inbox()">Inbox</button>
                    <button onclick="sent()">Sent</button>
                    <button onclick="drafts()">Drafts</button>
                    <button onclick="trash()">Trash</button>
                    <button onclick="logout()">Logout</button>
                </div>
            </td>
            <td>
                <table id="composeForm">
                    <tr>
                        <td><b>To:</b></td>
                        <td><input type="text" name="to" id="to" onblur="checkEmail()"></td>
                    </tr>
                    <tr align="right">
                        <td id="receiverEmail" colspan="2"></td>
                    <tr>
                        <td><b>Subject:</b></td>
                        <td><input type="text" name="subject" id="subject"></td>
                    </tr>
                    <tr>
                        <td><b>CC:</b></td>
                        <td><input type="text" name="cc" readonly></td>
                    </tr>
                    <tr>
                        <td><b>Message:</b></td>
                        <td><textarea name="message" id="message" rows="10" cols="40"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="action" id="sendBtn" value="Send" onclick="sendEmail()">
                            <input type="submit" name="action" id="draftBtn" value="Save as Draft" onclick="saveDraft()">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>