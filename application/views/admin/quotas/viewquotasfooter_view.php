<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $totalcompleted;?></td>
    <td><?php echo $totalquotas;?></td>
    <td style="padding: 3px;">
        <?php if (hasSurveyPermission($iSurveyId, 'quotas','create')) { ?>
            <form action="<?php echo $this->createUrl("admin/quotas/sa/newquota/surveyid/$iSurveyId");?>" method="post">
                <input name="submit" type="submit" class="quota_new" value="<?php $clang->eT("Add New Quota");?>" />
                <input type="hidden" name="sid" value="<?php echo $iSurveyId;?>" />
                <input type="hidden" name="action" value="quotas" />
                <input type="hidden" name="subaction" value="new_quota" />
            </form>

            <?php } ?>
    </td>
    	</tr>
	</tbody>
</table>
