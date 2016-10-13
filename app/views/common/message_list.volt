 <table class="table-bordered" style="width: 100%">
        <tbody>
            {% for m in messages %}
                <tr>
                    <td>{{m.uname}}</td><td>{{ m.text }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>