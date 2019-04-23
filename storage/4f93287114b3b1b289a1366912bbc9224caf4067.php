<?php $__env->startSection('title'); ?>
    page_maker
<?php $__env->stopSection(); ?>

<?php $__env->startSection('develop'); ?>

<div>
    <form action="/page_maker" method="post" target="_blank">
        <?php echo e(csrf_field()); ?>

            <div class="row">
                <div class="form-group col-5">
                    <label><b>Title</b></label>
                    <input type="text" name="title" class="form-control border border-success" placeholder="Title" autocomplete="off">
                </div>

                <div class="form-group col-5">
                    <label><b>Heading First Word</b></label>
                    <input type="text" name="heading_word" class="form-control border border-success" autocomplete="off">
                </div>

                <div class="form-group col-7">
                    <label><b>Meta Tag</b></label>
                    <textarea autocomplete="off" type="text" name= "meta_meta" class="form-control border border-success"  placeholder="Enter Meta Info" cols="30" rows="3"></textarea>
                </div>
            </div><br>

            
                <div class="form-group">
                    <label><b>Heading-1</b></label>
                    <input type="text" name="heading_1" class="form-control border border-success" autocomplete="off">
                </div>

                <div class="form-group">
                    <label><b>Heading-2</b></label>
                    <input type="text" name= "heading_2" class="form-control border border-success" autocomplete="off">
                </div>
                <br>

                <div class="row">
                        <div class="form-group col-4">
                            <label><b>Stage Link</b></label>
                            <input type="text" autocomplete="off" class="form-control border border-success" name="apply_online_value">
                        </div>
            
                        <div class="form-group col-4">
                            <label><b>Present Stage (bao, ao, fc, ac, ak, rst)</b></label>
                            <input type="text" name= "stage" value="bao" class="form-control border border-success"  placeholder="Enter Value">
                        </div>
            
                        <div class="form-group col-4">
                            <label><b>Last Date of the stage</b></label>
                            <date-picker format="yyyy-MM-dd" name="last_date" v-model="last_date" input-class="form-control border border-success" placeholder="YYYY-MM-DD"></date-picker>
                        </div>
                    </div><br>

                    <div class="row">
                            <div class="form-group col-7">
                                <label><b>Homepage Link Name</b></label>
                                <input autocomplete="off" type="text" name= "exam_href_value" v-model="homepage_href" class="form-control border border-success"  placeholder="Enter Value">
                            </div>
                
                            <div class="form-group col-5">
                                <label><b>File Name / DB Record Name <span class="red">[CAUTION]</span></b></label>
                                <input autocomplete="off" type="text" name= "exam_name" class="form-control border border-success" v-model="filename" placeholder="Enter Name">
                            </div>
                    </div><br>

                    <?php echo $job ?>
                    <dynamic-table section='job'></dynamic-table>
                    <br><br>

            <?php echo $date ?>
            <two-col-table section="date"></two-col-table>
            <br><br>

            <?php echo $fees ?>
            <p>&#8377;</p>
            <dynamic-table section='fees'></dynamic-table>
            <br><br>

            <div>
                <?php echo $eligibility ?>
                <button class="btn btn-sm btn-danger" v-on:click="eligible_two_table = (eligible_two_table ? false:true)" type="button">Two table</button>
                <br>
                <div v-if="eligible_two_table">
                    <h5><b>Age Limit</b></h5>
                    <dynamic-table section='age_limit'></dynamic-table>
                    <br><br>
                    <h5><b>Educational Qualification</b></h5>
                    <dynamic-table section='qualification'></dynamic-table>
                </div>
    
                <div v-else>
                    <h5><b>Eligibility</b></h5>
                    <dynamic-table section='eligible'></dynamic-table>
                </div>
            </div>

            <br><br>

            <label>Pattern <input type="checkbox" name="pattern_block" v-on:click="pattern_block = (pattern_block ? false:true)"></label><br>
            <div v-show="pattern_block">
                <?php echo $pattern ?>
                <button class="btn btn-sm btn-danger" v-on:click="pattern_two_table = (pattern_two_table ? false:true)" type="button">Two table</button>
                <br>
                <div v-if="pattern_two_table">
                    <div class="input-group-prepend">
                    <label class="input-group-text" ><b>Tier-1</b></label>
                    <input type="text" autocomplete="off" class="form-control" name="tier_1_heading" placeholder="Tier-1-heading">
                    </div>
                    
                    <dynamic-table section='tier_1'></dynamic-table>
                    <br><br>
                    <div class="input-group-prepend">
                            <label class="input-group-text" ><b>Tier-1</b></label>
                            <input type="text" autocomplete="off" class="form-control" name="tier_2_heading" placeholder="Tier-2-heading">
                    </div>
                    <dynamic-table section='tier_2'></dynamic-table>
                </div>
    
                <div v-else>
                    <h5><b>Exam Pattern</b></h5>
                    <dynamic-table section='pattern'></dynamic-table>
                </div>

                <input class="col-12" type="text" autocomplete="off" name="pattern-note-1" placeholder="Note-1">
                <input class="col-12" type="text" autocomplete="off" name="pattern-note-2" placeholder="Note-2">
                <br><br>
            </div>


            <label>Selection<input type="checkbox" name="selection_block" v-on:click="selection_block = (selection_block ? false:true)"></label><br>
            <div v-show="selection_block">
                <?php echo $selection ?>
                <dynamic-table section='selection'></dynamic-table>
                <br>
                <input class="col-12" type="text" autocomplete="off" name="selection-note-1" placeholder="Note-1">
                <input class="col-12" type="text" autocomplete="off" name="selection-note-2" placeholder="Note-2">
                <br><br>
            </div>

            <label>Vacancies<input type="checkbox" name="vacancies_block" v-on:click="vacancies_block = (vacancies_block ? false:true)"></label><br>
            <div v-show="vacancies_block">
                <?php echo $vacancies ?>
                <dynamic-table section='vacancies'></dynamic-table>
                <br><br>
            </div>

            <label>Centers <input type="checkbox" name="centers_block" v-on:click="centers_block = (centers_block ? false:true)"></label><br>
            <div v-show = "centers_block">
                <?php echo $centers ?>
                <dynamic-table section='centers'></dynamic-table>
                <br><br>
            </div>

            <?php echo $links ?>
            <two-col-table section="links"></two-col-table>
            <br><br>

            <label ><input type="checkbox" name="modify_db" v-on:click="modify_db = (modify_db ? false : true)" :checked="modify_db"><span class="red"><b>[CAUTION]</b></span> Yes, I want to add record in database.</label>

            <div id="database_tamper" v-if="modify_db">
        
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" ><b>Department</b></label>
                    </div>
                    <select multiple class = "custom-select"  v-model="depts">
                    <option v-for="department in departments" :value="department">{{department}}</option>
                    </select>
                </div>
                <div class="form-group">
                        <br><p>You selected = <span class="small"><b>{{depts}}</b></span></p>
                    <label><input type="checkbox" v-on:click = "new_dept= (new_dept ? false:true)"> I have new Department to register</label>
                    <input type="text" autocomplete="off" v-if="new_dept" class="form-control border border-success" v-model="new_category" placeholder="Please specify here">
                    <button v-if="new_dept" type="button" v-on:click="depts.push(new_category)">Add</button>
                    <input type="hidden" name="depts" :value="JSON.stringify(depts)">
                </div>
    
                <div class="form-group">
                    <label><b>Exam Link</b></label>
                    <input type="text" autocomplete="off" name= "exam_link" class="form-control border border-success" placeholder="Enter Exam Link" value="http://">
                    </div>
    
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" ><b>Qualification</b></label>
                    </div>
                    <select class="custom-select"  name="qualification">
                    <option v-for="qualification in qualifications" :value="qualification">{{qualification}}</option>
                    </select>
                </div>

    
                <div class="form-group">
                    <label><b>Next Check</b></label>
                    <date-picker format="yyyy-MM-dd" name="next_check" input-class="form-control border border-success" placeholder="YYYY-MM-DD"></date-picker>                </div>
    
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" ><b>Status</b></label>
                    </div>
                    <select class="custom-select"  name="status">
                    <option v-for="stat in status" :value="stat">{{stat}}</option>
                    </select>
                </div>
    
                <div class="form-group">
                    <label><b>Completed On</b></label>
                    <date-picker format="yyyy-MM-dd" name="completed_on" input-class="form-control border border-success" placeholder="YYYY-MM-DD"></date-picker>                </div>
            </div>

        <p ref="copyText" id="copy_text"><b>Copy this given below-</b><br>["{{homepage_href}}", "/exams/{{filename}}", true, "{{getDate()}}"],</p>
                        

        <label>
            <input type="checkbox" v-on:click= "on_ready_to_submit()">
            <span :class="{green: ready_to_submit, red : !ready_to_submit}">
                <b>Yes, I reviewed the form several times and I am ready to Submit</b>
            </span>
        </label><br><br>

        <button type="submit" class="btn btn-primary" :disabled='!ready_to_submit' v-on:click="modify_db=false">Submit</button>
    </form>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="/js/vue-develop.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>