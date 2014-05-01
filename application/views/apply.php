
	<div id="content_right">
    	<div class="title_2">
            <p>报名流程</p>
        </div>
        <div id="apply_detail">
        	<p class="apply_name">申请课程：<?php echo $course; ?></p>
        	<div class="apply_error"><?php echo $error; ?></div>
        	<form action="<?php echo base_url('apply/add/?cid=' . $cid); ?>" method="post">
	            <table width="630" align="center" border="0" cellpadding="0" cellspacing="0">
	            	<tr class="f_red">
	                	<td colspan="2">注明：带 * 为必填项目 其他的为选填</td>
	                </tr>
	                <tr>
	                	<td width="150" align="right" class="pad_r5">验证码：</td>
	                    <td><input name="apply_check" type="text" size="20" /><span><img class="captcha"
					src="<?php echo base_url('apply/captcha');?>" /> *</span></td>
	                </tr>
	                <tr>
	                	<td width="150" align="right" class="pad_r5">登陆邮箱：</td>
	                    <td><input name="email" type="text" size="40" /><span> *</span></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">姓名：</td>
	                    <td><input name="name" type="text" size="25" /><span> *</span></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">身份证号：</td>
	                    <td><input name="card" type="text" size="25" /><span> *</span></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">性别：</td>
	                    <td>
	                    	<label><input name="sex" type="radio" checked="checked" value="男" class="border_none" />男</label>
	                        <label><input name="sex" type="radio" value="女" class="border_none" />女</label>
	                    </td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">出生日期：</td>
	                    <td>
	                    <select name="birth_y" class="vlign_mid">
	                            	<option value="1950">1950</option>
	                                <option value="1951">1951</option>
	                            	<option value="1952">1952</option>
	                            	<option value="1953">1953</option>
	                            	<option value="1954">1954</option>
	                            	<option value="1955">1955</option>
	                            	<option value="1956">1956</option>
	                            	<option value="1957">1957</option>
	                            	<option value="1958">1958</option>
	                            	<option value="1959">1959</option>
	                            	<option value="1960">1960</option>
	                            	<option value="1961">1961</option>
	                            	<option value="1962">1962</option>
	                            	<option value="1963">1963</option>
	                            	<option value="1964">1964</option>
	                            	<option value="1965">1965</option>
	                            	<option value="1966">1966</option>
	                            	<option value="1967">1967</option>
	                            	<option value="1968">1968</option>
	                            	<option value="1969">1969</option>
	                            	<option value="1970">1970</option>
	                            	<option value="1971">1971</option>
	                            	<option value="1972">1972</option>
	                            	<option value="1973">1973</option>
	                            	<option value="1974">1974</option>
	                            	<option value="1975">1975</option>
	                            	<option value="1976">1976</option>
	                            	<option value="1977">1977</option>
	                            	<option value="1978">1978</option>
	                            	<option value="1979">1979</option>
	                            	<option value="1980">1980</option>
	                            	<option value="1981">1981</option>
	                            	<option value="1982">1982</option>
	                            	<option value="1983">1983</option>
	                            	<option value="1984">1984</option>
	                            	<option value="1985">1985</option>
	                            	<option value="1986">1986</option>
	                            	<option value="1987">1987</option>
	                            	<option value="1988">1988</option>
	                            	<option value="1989">1989</option>
	                            	<option value="1990">1990</option>
	                            	<option value="1991">1991</option>
	                            	<option value="1992">1992</option>
	                            	<option value="1993">1993</option>
	                            	<option value="1994">1994</option>
	                            	<option value="1995">1995</option>
	                            	<option value="1996">1996</option>
	                            	<option value="1997">1997</option>
	                            	<option value="1998">1998</option>
	                            	<option value="1999">1999</option>
	                            	<option value="2000">2000</option>  
	                        </select>
	                        年
	                        <select name="birth_m" class="vlign_mid" id="birth_month">
	                            	<option value="1">1</option>
	                                <option value="2">2</option>
	                                <option value="3">3</option>
	                                <option value="4">4</option>
	                                <option value="5">5</option>
	                                <option value="6">6</option>
	                                <option value="7">7</option>
	                                <option value="8">8</option>
	                                <option value="9">9</option>
	                                <option value="10">10</option>
	                                <option value="11">11</option>
	                                <option value="12">12</option>
	                        </select>
	                        月
	                        <select name="birth_d" class="vlign_mid" id="birth_day">
	                            	<option value="1">1</option>
	                                <option value="2">2</option>
	                                <option value="3">3</option>
	                                <option value="4">4</option>
	                                <option value="5">5</option>
	                                <option value="6">6</option>
	                                <option value="7">7</option>
	                                <option value="8">8</option>
	                                <option value="9">9</option>
	                                <option value="10">10</option>
	                                <option value="11">11</option>
	                                <option value="12">12</option>
	                                <option value="13">13</option>
	                                <option value="14">14</option>
	                                <option value="15">15</option>
	                                <option value="16">16</option>
	                                <option value="17">17</option>
	                                <option value="18">18</option>
	                                <option value="19">19</option>
	                                <option value="20">20</option>
	                                <option value="21">21</option>
	                                <option value="22">22</option>
	                                <option value="23">23</option>
	                                <option value="24">24</option>
	                                <option value="25">25</option>
	                                <option value="26">26</option>
	                                <option value="27">27</option>
	                                <option value="28">28</option>
	                                <option value="29">29</option>
	                                <option value="30">30</option>
	                                <option value="31">31</option>
	                        </select>
	                        日
	                        </td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">户口所在地：</td>
	                    <td><input name="account" type="text" size="60" /></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">期望上课城市：</td>
	                    <td><input name="city" id="userid" type="text" size="20" /></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">联系方式：</td>
	                    <td><input name="phone" id="userid" type="text" size="20" /><span> *</span></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">全职工作年限：</td>
	                    <td><input name="worktime" id="work_years" type="text" size="5" class="vlign_mid" /> 年<span class="vlign_mid"> *</span></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">目前或最近工作单位：</td>
	                    <td><input name="company" type="text" size="60" /></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">所在部门：</td>
	                    <td><input name="bumen" type="text" size="30" /></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">担任职务：</td>
	                    <td><input name="zhiwu" type="text" size="30" /></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">工作所在地：</td>
	                    <td><input name="suozaidi" type="text" size="60" /></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">是否为自主创业：</td>
	                    <td>
	                    	<label><input name="chuangye" type="radio" checked="checked" value="是" class="border_none" />是</label>
	                        <label><input name="chuangye" type="radio" value="否" class="border_none" />否</label>
	                    </td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">是否为上市公司：</td>
	                    <td>
	                    	<label><input name="shangshi" type="radio" checked="checked" value="是" class="border_none" />是</label>
	                        <label><input name="shangshi" type="radio" value="否" class="border_none" />否</label>
	                    </td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">目前个人年收入：</td>
	                    <td>
	                    	<label><input name="shouru" type="radio" value="低于30000" class="border_none" />低于30000</label>
	                        <label><input name="shouru" type="radio" value="30001-50000" class="border_none" />30001-50000</label>
	                        <label><input name="shouru" type="radio" checked="checked" value="50001-70000" class="border_none" />50001-70000</label>
	                        <label><input name="shouru" type="radio" value="70000-100000" class="border_none" />70000-100000</label><br />
	                        <label><input name="shouru" type="radio" value="100001-200000" class="border_none" />100001-200000</label>
	                        <label><input name="shouru"  type="radio" value="高于200000" class="border_none" />高于200000</label>
	                    </td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">贵公司性质：</td>
	                    <td>
	                    	<label><input name="gongsi" type="radio" checked="checked" value="国营/国有控股企业"  class="vlign_mid border_none" />国营/国有控股企业</label>
	                        <label><input name="gongsi" type="radio" value="民营/私营企业" class="vlign_mid border_none" />民营/私营企业</label>
	                        <label><input name="gongsi" type="radio" value="外资；请明示国别" class="vlign_mid border_none" />外资；请明示国别：</label>
	                        <label><input name="gongsi_guobie" type="text" class="vlign_mid" size="10" /></label><br />
	                        <label><input name="gongsi" type="radio" value="其他" class="vlign_mid border_none" />其他：</label>
	                        <label><input name="gongsi_qita" type="text" class="vlign_mid" /></label>
	                    </td>
	                </tr>
	             	<tr class="f_red">
	                	<td colspan="2">注明：请从最高学历填起，只需填写大学教育经历，无需填写高中及以下教育，教育至少填写一项。</td>
	                </tr>
	             	<tr align="left">
	                	<td colspan="2">院校一</td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">院校名称：</td>
	                    <td><input name="yx1_name" id="school_name1" type="text" size="40" /></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">就读专业：</td>
	                    <td><input name="yx1_major" id="major_name1" type="text" size="40" /></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">就读阶段：</td>
	                     <td>
	                    	<label><input name="yx1_degree" type="radio" checked="checked" value="大专"  class="vlign_mid border_none" />大专</label>
	                        <label><input name="yx1_degree" type="radio" value="本科" class="vlign_mid border_none" />本科</label>
	                        <label><input name="yx1_degree" type="radio" value="研究生" class="vlign_mid border_none" />研究生</label>
	                    </td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">毕业时间：</td>
	                    <td>
	                    	<select name="yx1_year" class="vlign_mid" id="graduate_year1">
                            	<option value="1970">1970</option>
                            	<option value="1971">1971</option>
                            	<option value="1972">1972</option>
                            	<option value="1973">1973</option>
                            	<option value="1974">1974</option>
                            	<option value="1975">1975</option>
                            	<option value="1976">1976</option>
                            	<option value="1977">1977</option>
                            	<option value="1978">1978</option>
                            	<option value="1979">1979</option>
                            	<option value="1980">1980</option>
                            	<option value="1981">1981</option>
                            	<option value="1982">1982</option>
                            	<option value="1983">1983</option>
                            	<option value="1984">1984</option>
                            	<option value="1985">1985</option>
                            	<option value="1986">1986</option>
                            	<option value="1987">1987</option>
                            	<option value="1988">1988</option>
                            	<option value="1989">1989</option>
                            	<option value="1990">1990</option>
                            	<option value="1991">1991</option>
                            	<option value="1992">1992</option>
                            	<option value="1993">1993</option>
                            	<option value="1994">1994</option>
                            	<option value="1995">1995</option>
                            	<option value="1996">1996</option>
                            	<option value="1997">1997</option>
                            	<option value="1998">1998</option>
                            	<option value="1999">1999</option>
                            	<option value="2000">2000</option>  
	                    	    <option value="2001">2001</option>
	                    	    <option value="2002">2002</option>
	                    	    <option value="2003">2003</option>
	                    	    <option value="2004">2004</option>
	                    	    <option value="2005">2005</option>
	                    	    <option value="2006">2006</option>
	                    	    <option value="2007">2007</option>
	                    	    <option value="2008">2008</option>
	                    	    <option value="2009">2009</option>
	                    	    <option value="2010">2010</option>
	                    	    <option value="2011">2011</option>
	                    	    <option value="2012">2012</option>
	                        </select>
	                    	年
	                        <select name="yx1_month" class="vlign_mid" id="graduate_month1">
	                            	<option value="1">1</option>
	                                <option value="2">2</option>
	                                <option value="3">3</option>
	                                <option value="4">4</option>
	                                <option value="5">5</option>
	                                <option value="6">6</option>
	                                <option value="7">7</option>
	                                <option value="8">8</option>
	                                <option value="9">9</option>
	                                <option value="10">10</option>
	                                <option value="11">11</option>
	                                <option value="12">12</option>
	                        </select>
	                        月
	                    </td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">毕业证书编号：</td>
	                    <td><input name="yx1_biye" type="text" size="40" /></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">学位证书编号：</td>
	                    <td><input name="yx1_xuewei" type="text" size="40" /></td>
	                </tr>
	                <tr align="left">
	                	<td colspan="2">院校二</td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">院校名称：</td>
	                    <td><input name="yx2_name" id="school_name2" type="text" size="40" /></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">就读专业：</td>
	                    <td><input name="yx2_major" id="major_name2" type="text" size="40" /></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">就读阶段：</td>
	                     <td>
	                    	<label><input name="yx2_degree" type="radio" checked="checked" value="大专"  class="vlign_mid border_none" />大专</label>
	                        <label><input name="yx2_degree" type="radio" value="本科" class="vlign_mid border_none" />本科</label>
	                        <label><input name="yx2_degree" type="radio" value="研究生" class="vlign_mid border_none" />研究生</label>
	                    </td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">毕业时间：</td>
	                    <td>
	                    	<select name="yx2_year" class="vlign_mid" id="graduate_year2">
                            	<option value="1970">1970</option>
                            	<option value="1971">1971</option>
                            	<option value="1972">1972</option>
                            	<option value="1973">1973</option>
                            	<option value="1974">1974</option>
                            	<option value="1975">1975</option>
                            	<option value="1976">1976</option>
                            	<option value="1977">1977</option>
                            	<option value="1978">1978</option>
                            	<option value="1979">1979</option>
                            	<option value="1980">1980</option>
                            	<option value="1981">1981</option>
                            	<option value="1982">1982</option>
                            	<option value="1983">1983</option>
                            	<option value="1984">1984</option>
                            	<option value="1985">1985</option>
                            	<option value="1986">1986</option>
                            	<option value="1987">1987</option>
                            	<option value="1988">1988</option>
                            	<option value="1989">1989</option>
                            	<option value="1990">1990</option>
                            	<option value="1991">1991</option>
                            	<option value="1992">1992</option>
                            	<option value="1993">1993</option>
                            	<option value="1994">1994</option>
                            	<option value="1995">1995</option>
                            	<option value="1996">1996</option>
                            	<option value="1997">1997</option>
                            	<option value="1998">1998</option>
                            	<option value="1999">1999</option>
                            	<option value="2000">2000</option>  
	                    	    <option value="2001">2001</option>
	                    	    <option value="2002">2002</option>
	                    	    <option value="2003">2003</option>
	                    	    <option value="2004">2004</option>
	                    	    <option value="2005">2005</option>
	                    	    <option value="2006">2006</option>
	                    	    <option value="2007">2007</option>
	                    	    <option value="2008">2008</option>
	                    	    <option value="2009">2009</option>
	                    	    <option value="2010">2010</option>
	                    	    <option value="2011">2011</option>
	                    	    <option value="2012">2012</option>
	                        </select>
	                    	年
	                        <select name="yx2_month" class="vlign_mid" id="graduate_month2">
	                            	<option value="1">1</option>
	                                <option value="2">2</option>
	                                <option value="3">3</option>
	                                <option value="4">4</option>
	                                <option value="5">5</option>
	                                <option value="6">6</option>
	                                <option value="7">7</option>
	                                <option value="8">8</option>
	                                <option value="9">9</option>
	                                <option value="10">10</option>
	                                <option value="11">11</option>
	                                <option value="12">12</option>
	                        </select>
	                        月
	                    </td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">毕业证书编号：</td>
	                    <td><input name="yx2_biye" type="text" size="40" /></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">学位证书编号：</td>
	                    <td><input name="yx2_xuewei" type="text" size="40" /></td>
	                </tr>
	                <tr align="left">
	                	<td colspan="2">院校三</td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">院校名称：</td>
	                    <td><input name="yx3_name" id="school_name3" type="text" size="40" /></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">就读专业：</td>
	                    <td><input name="yx3_major" id="major_name3" type="text" size="40" /></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">就读阶段：</td>
	                     <td>
	                    	<label><input name="yx3_degree" type="radio" checked="checked" value="大专"  class="vlign_mid border_none" />大专</label>
	                        <label><input name="yx3_degree" type="radio" value="本科" class="vlign_mid border_none" />本科</label>
	                        <label><input name="yx3_degree" type="radio" value="研究生" class="vlign_mid border_none" />研究生</label>
	                    </td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">毕业时间：</td>
	                    <td>
	                    	<select name="yx3_year" class="vlign_mid" id="graduate_year2">
                            	<option value="1970">1970</option>
                            	<option value="1971">1971</option>
                            	<option value="1972">1972</option>
                            	<option value="1973">1973</option>
                            	<option value="1974">1974</option>
                            	<option value="1975">1975</option>
                            	<option value="1976">1976</option>
                            	<option value="1977">1977</option>
                            	<option value="1978">1978</option>
                            	<option value="1979">1979</option>
                            	<option value="1980">1980</option>
                            	<option value="1981">1981</option>
                            	<option value="1982">1982</option>
                            	<option value="1983">1983</option>
                            	<option value="1984">1984</option>
                            	<option value="1985">1985</option>
                            	<option value="1986">1986</option>
                            	<option value="1987">1987</option>
                            	<option value="1988">1988</option>
                            	<option value="1989">1989</option>
                            	<option value="1990">1990</option>
                            	<option value="1991">1991</option>
                            	<option value="1992">1992</option>
                            	<option value="1993">1993</option>
                            	<option value="1994">1994</option>
                            	<option value="1995">1995</option>
                            	<option value="1996">1996</option>
                            	<option value="1997">1997</option>
                            	<option value="1998">1998</option>
                            	<option value="1999">1999</option>
                            	<option value="2000">2000</option>  
	                    	    <option value="2001">2001</option>
	                    	    <option value="2002">2002</option>
	                    	    <option value="2003">2003</option>
	                    	    <option value="2004">2004</option>
	                    	    <option value="2005">2005</option>
	                    	    <option value="2006">2006</option>
	                    	    <option value="2007">2007</option>
	                    	    <option value="2008">2008</option>
	                    	    <option value="2009">2009</option>
	                    	    <option value="2010">2010</option>
	                    	    <option value="2011">2011</option>
	                    	    <option value="2012">2012</option>
	                        </select>
	                    	年
	                        <select name="yx3_month" class="vlign_mid" id="graduate_month3">
	                            	<option value="1">1</option>
	                                <option value="2">2</option>
	                                <option value="3">3</option>
	                                <option value="4">4</option>
	                                <option value="5">5</option>
	                                <option value="6">6</option>
	                                <option value="7">7</option>
	                                <option value="8">8</option>
	                                <option value="9">9</option>
	                                <option value="10">10</option>
	                                <option value="11">11</option>
	                                <option value="12">12</option>
	                        </select>
	                        月
	                    </td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">毕业证书编号：</td>
	                    <td><input name="yx3_biye" type="text" size="40" /></td>
	                </tr>
	                <tr>
	                	<td align="right" class="pad_r5">学位证书编号：</td>
	                    <td><input name="yx3_xuewei" type="text" size="40" /></td>
	                </tr>
	            </table>
            	<p class="t_center"><input type="submit" value="现&nbsp;在&nbsp;就&nbsp;报&nbsp;名" class="submit_applynow" /></p>
           	</form>
        </div>
    </div>
    <div class="clear">
    </div>
    <div class="content_foot1"> 	
    </div>
</div>
<div class="content_foot2">
</div>