  <script>
    function toggleCharges() {
      if (document.getElementById("max_charges").checked == true) {
        document.getElementById("item_charges").setAttribute("disabled", true);
      }
      else {
        document.getElementById("item_charges").removeAttribute("disabled");
      }
    }
  </script>
  <form name="lootdrop_item" method="POST" action="index.php?editor=loot&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&action=68&npcid=<?=$npcid?>&ldid=<?=$ldid?>&itemid=<?=$itemid?>">
    <div class="edit_form" style="width: 400px;">
      <div class="edit_form_header">Edit Global Lootdrop Item</div>
      <div class="edit_form_content">
        <table width="100%" cellpadding="3" cellspacing="3">
          <tr>
            <td>
              <strong>Lootdrop ID:</strong><br>
              <input type="text" size="7" value="<?=$ldid?>" disabled>
            </td>
            <td>
              <strong>Item ID:</strong><br>
              <input id="id" type="text" size="7" value="<?=$itemid?>" disabled>
            </td>
            <td>
              <strong>Charges:</strong>&nbsp;&nbsp;&nbsp;<strong>Max:</strong><br>
              <input type="text" size="5" name="item_charges" id="item_charges" value="<?=$item_charges?>">&nbsp;
              <input type="checkbox" name="max_charges" id="max_charges" onChange="toggleCharges();">
            </td>
          </tr>
        </table><br>
        <table width="100%" cellpadding="3" cellspacing="3">
          <tr>
            <td>
              <strong>&nbsp;<br>Equip:</strong><br>
              <select name="equip_item">
                <option value="0"<?echo ($equip_item == 0) ? " selected" : "";?>>No</option>
                <option value="1"<?echo ($equip_item == 1) ? " selected" : "";?>>Yes</option>
              </select>
            </td>
            <td>
              <strong>&nbsp;<br>Chance:</strong><br>
              <input type="text" size="5" name="chance" value="<?=$chance?>">
            </td>
            <td>
              <strong>Disabled<br>Chance:</strong><br>
              <input type="text" size="5" name="disabled_chance" value="<?=$disabled_chance?>">
            </td>
            <td>
              <strong>&nbsp;<br>Multiplier:</strong><br>
              <input type="text" size="5" name="multiplier" value="<?=$multiplier?>">
            </td>
          </tr>
          <tr><td colspan="4">&nbsp;</td></tr>
          <tr>
            <td>
              <strong>Trivial<br>Min Level:</strong><br>
              <input type="text" size="5" name="trivial_min_level" value="<?=$trivial_min_level?>">
            </td>
            <td>
              <strong>Trivial<br>Max Level:</strong><br>
              <input type="text" size="5" name="trivial_max_level" value="<?=$trivial_max_level?>">
            </td>
            <td>
              <strong>NPC<br>Min Level:</strong><br>
              <input type="text" size="5" name="npc_min_level" value="<?=$npc_min_level?>">
            </td>
            <td>
              <strong>NPC<br>Max Level:</strong><br>
              <input type="text" size="5" name="npc_max_level" value="<?=$npc_max_level?>">
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <strong>Min Expansion:</strong><br>
              <input type="text" size="18" name="min_expansion" value="<?=$min_expansion?>">
            </td>
            <td colspan="2">
              <strong>Max Expansion:</strong><br>
              <input type="text" size="18" name="max_expansion" value="<?=$max_expansion?>">
            </td>
          </tr>
          <tr>
            <td colspan="4">
              <strong>Content Flags:</strong><br>
              <input type="text" size="51" name="content_flags" value="<?=$content_flags?>">
            </td>
          </tr>
          <tr>
            <td colspan="4">
              <strong>Content Flags Disabled:</strong><br>
              <input type="text" size="51" name="content_flags_disabled" value="<?=$content_flags_disabled?>">
            </td>
          </tr>
        </table><br><br>
        <center>
          <input type="hidden" name="global_loot" value="<?=$global_loot?>">
          <input type="hidden" name="ldid" value="<?=$ldid?>">
          <input type="hidden" name="itemid" value="<?=$itemid?>">
          <input type="submit" name="submit" value="Update Item">&nbsp;&nbsp;
          <input type="button" value="Cancel" onClick="history.back();">
        </center>
      </div>
    </div>
  </form>
