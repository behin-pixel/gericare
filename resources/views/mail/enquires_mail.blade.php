
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background: #f5f8fa;">
    <tbody>
      <tr>
        <td style="padding: 30px;"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0" style="background: #fff;">
          <tbody>
            <tr>
              <td align="center" style="background: #7C164B; padding: 15px; " ><img src="{{ asset('/public/website/assets/images/logo-w.png') }}" width="374" height="75" alt="Geri Care Hospital" /></td>
            </tr>
            <tr>
              <td align="center" style="padding:20px; color: #8e8e8e; font-family:Helvetica, Arial; font-size:22px;">New submission on <b>Geri Care  </b><br>
                &quot;{{$mailData['subject']}}&quot;</td>
            </tr>
            <tr>
              <td style="padding: 20px; "><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>

                    @if ($mailData['type']=='request_call_back')
                    <tr>
                        <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #929292; " >Name</td>
                    </tr>
                    <tr>
                        <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " > {{$mailData['name']}} </td>
                    </tr>
                    <tr>
                        <td height="20" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #929292; " > Phone </td>
                        </tr>
                    <tr>
                        <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " > {{$mailData['mobile_no']}} </td>
                        </tr>
                    <tr>
                        <td height="20" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >&nbsp;</td>
                    </tr>
                    @else
                    <tr>
                        <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #929292; " >Name</td>
                    </tr>
                    <tr>
                        <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " > {{$mailData['name']}} </td>
                    </tr>
                    <tr>
                        <td height="20" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #929292; " > Phone </td>
                        </tr>
                    <tr>
                        <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " > {{$mailData['mobile_no']}} </td>
                        </tr>
                    <tr>
                        <td height="20" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #929292; " >Email</td>
                    </tr>
                    <tr>
                        <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " > {{$mailData['email']}} </td>
                    </tr>
                    <tr>
                        <td height="20" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #929292; " > Services </td>
                        </tr>
                    <tr>
                        <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " > {{$mailData['services']}} </td>
                        </tr>
                    <tr>
                        <td height="20" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #929292; " > Message </td>
                        </tr>
                    <tr>
                        <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " > {{$mailData['message']}} </td>
                        </tr>
                    <tr>
                        <td height="20" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >&nbsp;</td>
                    </tr>
                    @endif
                

                  </tbody>
                </table></td>
            </tr>
            </tbody>
        </table></td>
      </tr>
    </tbody>
    </table>